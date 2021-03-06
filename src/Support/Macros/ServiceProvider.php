<?php

namespace Fjord\Support\Macros;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Macros.
     *
     * @var array
     */
    protected $macros = [
        BuilderSearch::class,
        FormMarkdown::class,
        BuilderSort::class,
        CrudMetaMacro::class,
    ];

    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMacros();
    }

    /**
     * Register macros.
     *
     * @return void
     */
    public function registerMacros()
    {
        foreach ($this->macros as $macro) {
            $instance = new $macro;

            if (method_exists($instance, 'register')) {
                $instance->register();
            }
        }
    }
}
