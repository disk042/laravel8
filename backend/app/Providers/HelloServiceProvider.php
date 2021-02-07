<?php

namespace App\Providers;

use App\Http\Validators\HelloValidator;
use Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Rules\Myrule;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello', function($attribute, $value, $parameters, $validator)
        {
            return $value % 2 == 0;
        });
    }
}
