<?php

namespace App\Observers;

use App\Models\Task;
use App\Models\User;
use App\Notifications\CreateTask;
use Illuminate\Support\Facades\Notification;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     */
    public function created(Task $Task): void
    {
        $user = auth()->user();
        $user->notify(new CreateTask('hello'));

    }

    /**
     * Handle the Task "updated" event.
     */
    public function updated(Task $Task): void
    {
        //
    }

    /**
     * Handle the Task "deleted" event.
     */
    public function deleted(Task $Task): void
    {
        //
    }

    /**
     * Handle the Task "restored" event.
     */
    public function restored(Task $Task): void
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     */
    public function forceDeleted(Task $Task): void
    {
        //
    }
}
