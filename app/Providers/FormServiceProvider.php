<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('Text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('TextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('Submit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
