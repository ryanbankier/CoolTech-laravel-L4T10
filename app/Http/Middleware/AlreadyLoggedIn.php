<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('LoggedUser') && (url('admin-login') == $request->url() || url('register-admin') == $request->url())){
            return redirect('admin');
        }

        if(session()->has('LoggedAuthor') && (url('author-login') == $request->url() || url('register-author') == $request->url())){
            return redirect('author');
        }
        
        return $next($request);
    }
}
