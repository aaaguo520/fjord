<?php

namespace Fjord\Application\Translation;

use Fjord\Support\Facades\FjordLang;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot()
    {
        // Language path
        FjordLang::addPath(fjord_path('resources/lang'));
    }
}
