<?php
namespace App\Modules\Themes;

use App\Models\LegoTheme;
use App\Modules\Core\Services\ServiceLanguages;

class ThemeService extends ServiceLanguages {
    public function __construct(LegoTheme $model)
    {
        parent::__construct($model);
    }

    public function all() {
        return $this->_model->get();
    }
}