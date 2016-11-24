<?php

namespace App\Http\Middleware;

use Closure;

class BeforeUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('age') <=20){

            echo '年龄不能小于20';
            echo '<a href="addUser">点击返回</a>';
           exit;
        }
        return $next($request);
    }

}
