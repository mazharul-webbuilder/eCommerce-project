<?php

namespace Incevio\Package\SearchAutocomplete\Http\Controllers;

use App\Models\Inventory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class AutocompleteController extends Controller
{

    /**
     * Search autocomplete option.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $take = get_search_autocomplete_config()['max_result'];

        $items = Inventory::search($request->input('q'))->query(function ($q1) {
            $q1->with(['image:path,imageable_id,imageable_type'])
                ->active()
                ->groupBy('shop_id', 'product_id');
        })->take($take)->paginate($take);

        $result = '';
        foreach ($items as $item) {
            $result .= View::make('searchAutocomplete::_itemList', ['item' => $item])->render();
        }

        if ($result == '') {
            $result = '<li>' . trans('theme.no_product_found') . '</li>';
        }

        return response()->json($result);
    }
}
