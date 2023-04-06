<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginSucces
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        if ($request->session()->get('client')){
//            return redirect()->route('client.login')->with('success','Bạn đã đăng nhập bằng tài khoản '.$request->session()->get('client').'.Bạn có thể đăng nhập vào tải khoản khác nếu muốn');
//        }
//        if ($request->session()->get('admin')){
//            return redirect()->route('client.login');
//        }
        return $next($request);
    }
}
