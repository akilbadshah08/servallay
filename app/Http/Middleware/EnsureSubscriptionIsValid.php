<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\UserDetail;
use Closure;

class EnsureSubscriptionIsValid
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
        $user = UserDetail::where('user_id',Auth::id())->get();
        if ($user[0]->plan_date=='' || strtotime($user[0]->plan_date)<strtotime(date('Y-m-d'))) {
            return redirect('subscription');
        }

        return $next($request);
    }
}