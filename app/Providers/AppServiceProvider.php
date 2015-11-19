<?php

namespace App\Providers;

use EhackB\Entities\Competitions\Competition;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('teamcapacity', function($attribute, $value, $parameters, $validator)
        {
            $competition = Competition::find($value);
            // TODO check if team cap is reached
            if ($competition->teams)
			{
				if ($competition->participators->count() >= $competition->max / 5)
					return false;
			}
			else
			{
				if ($competition->users->count() >= $competition->max)
					return false;
			}

			return true;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
