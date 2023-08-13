<?php

namespace Incevio\Package\Eventy\Http\Controllers;

use App\Common\Authorizable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Incevio\Package\Eventy\Models\Event;
use Incevio\Package\Eventy\Repositories\EloquentEvent;
use Incevio\Package\Eventy\Http\Requests\CreateEventRequest;
use Incevio\Package\Eventy\Http\Requests\UpdateEventRequest;

class AdminController extends Controller
{
    use Authorizable;

    /**
     * The event repository.
     *
     * @param  \Laravel\Spark\Contracts\Repositories\EloquentEvent
     */
    protected $event;

    private $model_name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EloquentEvent $event)
    {
        parent::__construct();

        $this->model_name = trans('eventy::lang.event');

        $this->event = $event;
    }

    /**
     * Get all of the application's recent event.
     *
     * @return Response
     */
    public function index()
    {
        $events = $this->event->all();

        return view('eventy::index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventy::_create');
    }

    /**
     * Create a new Event.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {
                // echo "<pre>"; print_r($request->all()); echo "<pre>"; exit('end!');
        $this->event->store($request);

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('eventy::_edit', compact('event'));
    }

    /**
     * Update the given Event.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $this->event->update($request, $id);

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }

    /**
     * Delete the Event with the given ID.
     *
     * @param  string  $id
     * @return Response
     */
    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return back()->with('success', trans('messages.deleted', ['model' => $this->model_name]));
    }

    /**
     * all registered users of the event
     *
     **/

    public function eventUser($id)
    {
        $users = Event::find($id)->customers->unique();

        return view('eventy::user', compact('users','id'));
    }


    /**
     * cancel event from event details page.
     *
     */

    public function cancelBook($id,$cid){

        $event = Event::find($id);

        $event->customers()->detach($cid);

        return back()->with('success', trans('eventy::lang.event_cancel_success'));
    }

}
