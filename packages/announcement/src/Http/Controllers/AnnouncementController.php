<?php

namespace Incevio\Package\Announcement\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notifications\Push\HasNotifications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Incevio\Package\Announcement\Contracts\AnnouncementRepository;
use Incevio\Package\Announcement\Http\Requests\CreateAnnouncementRequest;
use Incevio\Package\Announcement\Http\Requests\UpdateAnnouncementRequest;
use Incevio\Package\Announcement\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * The announcements repository.
     *
     * @param  \Laravel\Spark\Contracts\Repositories\AnnouncementRepository
     */
    protected $announcements;

    private $model_name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AnnouncementRepository $announcements)
    {
        parent::__construct();

        $this->model_name = trans('app.model.announcement');

        $this->announcements = $announcements;
    }

    /**
     * Get all of the application's recent announcements.
     *
     * @return Response
     */
    public function index()
    {
        $announcements = $this->announcements->recent();

        return view('announcement::index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement::_create');
    }

    /**
     * Create a new announcement.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateAnnouncementRequest $request)
    {
        $this->announcements->create(
            $request->user(), $request->all()
        );

        Cache::forget('global_announcement');

        if (
            config('mobile_app.push_notification.notify') == true &&
            config('mobile_app.push_notification.group_notify') == true
        ) {
            HasNotifications::pushNotification([
                'subject' => $request->action_text,
                'message' => $request->body,
            ], config('mobile_app.push_notification.group'));
        }

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('announcement::_edit', compact('announcement'));
    }

    /**
     * Update the given announcement.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(UpdateAnnouncementRequest $request, $id)
    {
        $this->announcements->update(
            Announcement::findOrFail($id), $request->all()
        );

        Cache::forget('global_announcement');

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }

    /**
     * Delete the announcement with the given ID.
     *
     * @param  string  $id
     * @return Response
     */
    public function destroy($id)
    {
        Announcement::findOrFail($id)->delete();

        Cache::forget('global_announcement');

        return back()->with('success', trans('messages.deleted', ['model' => $this->model_name]));
    }

    /**
     * Update announcement read timestamp.
     */
    public function read()
    {
        User::findOrFail(Auth::id())->forceFill(['read_announcements_at' => \Carbon\Carbon::now()])->save();

        return response('success', 200);
    }
}
