<?php

namespace App\Http\Middleware;

use Closure;

class checkAge
{
    /**
     * 处理传入的请求
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->id <= 200) {
            return redirect('home');
        }

        return $next($request);
    }
}
