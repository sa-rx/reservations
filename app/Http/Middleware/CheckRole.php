<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

      if ($request->user() === null)
      {
        return redirect()->to('/');
      }


      $actions = $request->route()->getAction();
      $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if(Auth::user()->hasRole('Admin'))
      {
        return $next($request);
      }

        return redirect()->to('home');

    }
}
