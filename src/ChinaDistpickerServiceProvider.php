<?php

namespace Dcat\ChinaDistpicker;

use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Illuminate\Support\ServiceProvider;

class ChinaDistpickerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ChinaDistpicker $extension)
    {
        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'dcat-admin-china-distpicker');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendors/dcat-admin-ext/china-distpicker')],
                'dcat-admin-china-distpicker'
            );
        }

        Admin::booting(function () {
            Form::extend('distpicker', Distpicker::class);
            Filter::extend('distpicker', DistpickerFilter::class);
        });
    }
}