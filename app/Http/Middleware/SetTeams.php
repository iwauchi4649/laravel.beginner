<?php

namespace App\Http\Middleware;

use App\Team;
use Closure;
use Illuminate\Auth\AuthManager;
use Illuminate\View\Factory;

class SetTeams
{
    public function __construct(Factory $viewFactory, AuthManager $authManager)
    {
        $this->viewFactory = $viewFactory;
        $this->authManager = $authManager;
    }

    public function handle($request, \Closure $next)
    {
        $id = $this->authManager->user()->id;
        $teams = Team::all()->where("user_id", $id);
        $this->viewFactory->share('teams', $teams);

        return $next($request);
    }
}
