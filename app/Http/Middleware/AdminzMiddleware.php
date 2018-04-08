<?php
/**
 * Created by PhpStorm.
 * User: yuzhipeng
 * Date: 2018/3/26
 * Time: 上午10:39
 */
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminzMiddleware
{
    public function handle($request, Closure $next)
    {

        return $next($request);
    }
}