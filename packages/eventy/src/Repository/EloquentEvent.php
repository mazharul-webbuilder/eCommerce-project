<?php

namespace Incevio\Package\Eventy\Repositories;

use Auth;
use Illuminate\Http\Request;
use App\Repositories\BaseRepository;
use App\Repositories\EloquentRepository;
use Incevio\Package\Eventy\Models\Event;

class EloquentEvent extends EloquentRepository implements BaseRepository, EventRepository
{
	protected $model;

	public function __construct(Event $event)
	{
		$this->model = $event;
	}

    public function all()
    {
        if (! Auth::user()->isFromPlatform()) {
            return $this->model->mine()->orderBy('starts', 'desc')->get();
        }

        return $this->model->orderBy('starts', 'desc')->get();
    }

	public function destroy($id)
	{
        $event = parent::findTrash($id);

        // $event->detachTags($event->id, 'event');

        $event->flushImages();

        return $event->forceDelete();
	}
}