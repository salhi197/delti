<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\Notification;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function boot()
    {
        // Schema::defaultStringLength(191);
        // $notifications = Notification::where('user',Auth::user()->id)->orderBy('created','desc')->whereDate('created_at', Carbon::today())->get();  
        // dd($notifications);
        // if(Auth::check()){
        //     $notifications = Notification::where('user',Auth::user()->id)->orderBy('created','desc')->whereDate('created_at', Carbon::today())->get();  
        //     dd($notifications);          
        //     Config::set('notifications', 'notifications');
        //     dd(Config::get('notifications'));
        // }

        app()->singleton('lang',function (){
            if (auth()->user()) {
                if (empty(auth()->user()->lang)) {
                    return 'en';
                }else{
                    return auth()->user()->lang;
                }
            }else{
                if (session()->has('lang')) {
                    return session()->get('lang');
                }else{
                    return 'en';
                }
            }
        });
    }
}
