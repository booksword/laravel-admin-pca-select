<?php

namespace Dcat\ChinaDistpicker;

use Dcat\Admin\Grid\Filter\Presenter\Presenter;

class FilterPresenter extends Presenter
{
    public function view() : string
    {
        return 'dcat-admin-china-distpicker::filter';
    }
}