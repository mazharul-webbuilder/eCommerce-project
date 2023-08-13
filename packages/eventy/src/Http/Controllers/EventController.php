<?php

namespace Incevio\Package\Eventy\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Incevio\Package\Eventy\Models\Event;
use Incevio\Package\Eventy\Models\EventBook;

class EventController extends Controller
{
    /**
     * Get all of the application's recent event.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::active()->open()->paginate(10);

        return view('eventy::frontend.index', compact('events'));
    }

    /**
     * details page of  event.
     *
     */

    public function show($slug){

        $events = Event::active()->open()->take(5)->get();

        $event = Event::active()->open()->where('slug', $slug)->first();

        return view('eventy::frontend.show', compact('event', 'events'));
    }

    /**
     * book event from event details page.
     *
     */

    public function eventBook($id){

        $user = Auth::user();

        $user->events()->attach($id);

        return back()->with('success', trans('eventy::lang.event_book_success'));
    }

    /**
     * cancel event from event details page.
     *
     */

    public function cancelBook($id){

        $user = Auth::user();

        $user->events()->detach($id);

        return back()->with('success', trans('eventy::lang.event_cancel_success'));
    }

}
