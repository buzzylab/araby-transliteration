<?php

namespace ArabyPHP\Transliteration\Laravel;

use Illuminate\Support\ServiceProvider;
use ArabyPHP\Transliteration\Transliteration;

class TransliterationServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->singleton('transliteration', function ($app) {
            return new Transliteration();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return ['transliteration'];
    }
}
