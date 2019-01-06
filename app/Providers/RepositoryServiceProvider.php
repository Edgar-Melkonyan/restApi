<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to the implementation repository class
     */
    public function register()
    {
        $this->app->bind("App\Repositories\User\UserRepository", "App\Repositories\User\UserService");
        $this->app->bind("App\Repositories\Note\NoteRepository", "App\Repositories\Note\NoteService");
    }
}
