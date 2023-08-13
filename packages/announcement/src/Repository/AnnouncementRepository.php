<?php

namespace Incevio\Package\Announcement\Repository;

use Incevio\Package\Announcement\Contracts\AnnouncementRepository as Contract;
use Incevio\Package\Announcement\Events\AnnouncementCreated;
use Illuminate\Support\Arr;
use Incevio\Package\Announcement\Models\Announcement;
use Ramsey\Uuid\Uuid;

class AnnouncementRepository implements Contract
{
    /**
     * {@inheritdoc}
     */
    public function recent()
    {
        return Announcement::with('creator')->orderBy('created_at', 'desc')->take(8)->get();
    }

    /**
     * {@inheritdoc}
     */
    public function create($user, array $data)
    {
        $announcement = Announcement::create([
            'id' => Uuid::uuid4(),
            'user_id' => $user->id,
            'body' => $data['body'],
            'action_text' => Arr::get($data, 'action_text'),
            'action_url' => Arr::get($data, 'action_url'),
        ]);

        event(new AnnouncementCreated($announcement));

        return $announcement;
    }

    /**
     * {@inheritdoc}
     */
    public function update(Announcement $announcement, array $data)
    {
        $announcement->fill([
            'body' => $data['body'],
            'action_text' => Arr::get($data, 'action_text'),
            'action_url' => Arr::get($data, 'action_url'),
        ])->save();
    }
}
