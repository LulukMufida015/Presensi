<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\http\Request;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin
{
    /**
     * the guard implementation.
     *
     * @var Guard 
     */
    protected $auth;

    /**
     * create a new filter intance.
     *
     * @var Guard $auth
     * @return void
     */

     public function __construct(Guard $auth)
     {
         $this->auth = $auth;
     }

     /**
     * create a new filter intance.
     *
     * @param \Illuminate\Http\Requst request
     * @param \Closure $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if ($this->auth->getUser()->roles !== "mahasiswa") {
             abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}