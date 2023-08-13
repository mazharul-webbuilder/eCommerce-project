<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Http\Controllers\Controller;
use App\Http\Requests\Validations\PackageInstallationRequest;
use App\Services\PackageInstaller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;

class PackagesController extends Controller
{
    //# Packages List
    public function index()
    {
        $installables = $this->scanPackages();

        $installs = Package::all();

        return view('admin.packages.index', compact('installables', 'installs'));
    }

    public function upload()
    {
        return view('admin.packages._upload');
    }

    public function save(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        exit('end!');
    }

    /**
     * Initiate Package
     *
     * @param Request $request
     * @param [type] $package
     * 
     * @return void
     */
    public function initiate(Request $request, $package)
    {
        if (config('app.demo') == true && config('app.debug') !== true) {
            return back()->with('warning', trans('messages.demo_restriction'));
        }

        $installable = $this->scanPackages($package);

        if ($installable) {
            if (Package::where('slug', $installable['slug'])->first()) {
                return back()->with('error', trans('messages.package_installed_already', ['package' => $package]));
            }
        }

        return view('admin.packages._initiate', compact('installable'));
    }

    public function install(PackageInstallationRequest $request, $package)
    {
        if (config('app.demo') == true && config('app.debug') !== true) {
            return back()->with('warning', trans('messages.demo_restriction'));
        }

        $installable = $this->scanPackages($package);

        if ($installable) {
            try {
                $installer = new PackageInstaller($request, $installable);

                $installer->install();
            } catch (\Exception $e) {
                Log::error($e);

                // Uninstall the package
                $installer->uninstall();

                $registered = Package::where('slug', $package)->first();
                if ($registered) {
                    $registered->delete();
                }

                return back()->with('error', $e->getMessage());
            }

            Artisan::call('cache:clear');
            Artisan::call('route:clear');

            return back()->with('success', trans('messages.package_installed_success', ['package' => $package]));
        }

        return back()->with('error', trans('messages.failed'));
    }

    public function uninstall(Request $request, $package)
    {
        if (config('app.demo') == true && config('app.debug') !== true) {
            return back()->with('warning', trans('messages.demo_restriction'));
        }

        $registered = Package::where('slug', $package)->firstOrFail();

        // Get the plugin info
        $uninstallable = $this->scanPackages($package);

        // Start transaction!
        DB::beginTransaction();

        try {
            $installer = new PackageInstaller($request, $uninstallable);

            if ($installer->uninstall()) {
                // Remove the package from cache
                Artisan::call('cache:clear');
                Artisan::call('route:clear');
                // Cache::forget('package.' . $package);

                if ($registered->delete()) {
                    $msg = trans('messages.package_uninstalled_success', ['package' => $package]);

                    // Everything is fine. Now commit the transaction
                    DB::commit();

                    return back()->with('success', $msg);
                }
            }
        } catch (\Exception $e) {
            // rollback the transaction and log the error
            DB::rollback();

            Log::error($e);

            return back()->with('error', $e->getMessage());
        }

        return back()->with('error', trans('messages.failed'));
    }

    //#Enable Disable Package:
    public function activation(Request $request, $package)
    {
        if (config('app.demo') == true && config('app.debug') !== true) {
            return response('error', 444);
        }

        // $this->authorize('update', $system); // Check permission

        // When the package is registered
        if ($registered = Package::where('slug', $package)->first()) {
            $registered->active = !$registered->active;
            $registered->save();

            // Remove the package from cache
            Artisan::call('cache:clear');
            // Cache::forget('package.' . $package);

            return response('success', 200);
        }

        // Not registered yet
        $unregistered = $this->scanPackages($package);
        Log::info($unregistered);

        if ($unregistered) {
            $registered = Package::create($unregistered);
        }

        return response('success', 200);

        // return response('error', 405);
    }

    /**
     * Updating Package settings
     *
     * @return \Illuminate\Http\Response
     */
    public function updateConfig(Request $request)
    {
        if (updateOptionTable($request)) {
            Artisan::call('cache:clear');

            return back()->with('success', trans('messages.package_settings_updated'));
        }

        return back()->with('error', trans('messages.failed'));
    }

    /**
     * Toggle config, Its uses the ajax middleware
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $option
     *
     * @return \Illuminate\Http\Response
     */
    public function toggleConfig(Request $request, $option)
    {
        if (config('app.demo') == true && config('app.debug') !== true) {
            return response('error', 444);
        }

        // $this->authorize('update', $system); // Check permission

        if (DB::table('options')->where('option_name', $option)->update([
            'option_value' => DB::raw('NOT option_value'),
        ])) {
            Artisan::call('cache:clear');

            return response('success', 200);
        }

        return response('error', 405);
    }

    //#Loading Package:
    private function scanPackages($slug = null)
    {
        $packages = [];

        foreach (glob(base_path('packages/*'), GLOB_ONLYDIR) as $dir) {
            if (file_exists($manifest = $dir . '/manifest.json')) {
                // If manifest.json is not an empty file parse json values
                $json = file_get_contents($manifest);

                if ($json !== '') {
                    $data = json_decode($json, true);

                    if ($data === null) {
                        throw new \Exception("Invalid manifest.json file at [$dir]");
                    }

                    // Insert the path into the dataset
                    $data['path'] = $dir;

                    // If a slug is given, return the match only
                    if ($slug && $data['slug'] == $slug) {
                        return $data;
                    }

                    $packages[] = $data;
                }
            }
        }

        return $packages;
    }
}
