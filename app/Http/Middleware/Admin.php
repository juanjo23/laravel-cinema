<?php

namespace Cinema\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{

    protected $auth;
    function __construct(Guard $auth){
      $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $this->auth->user()->id != 1){
          Session::flash('message-error', 'No tienes suficientes privilegios para realizar esta acción');

          return redirect()->to('admin');
        }
        return $next($request);
    }
}
