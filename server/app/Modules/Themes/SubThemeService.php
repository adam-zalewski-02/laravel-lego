<?php
namespace App\Modules\Themes;

use App\Models\LegoSubTheme;
use App\Modules\Core\Services\ServiceLanguages;

class SubThemeService extends ServiceLanguages {
    public function __construct(LegoSubTheme $model)
    {
        parent::__construct($model);
    }

    public function getSubThemesByParentTheme($parent_theme_code) {
        return $this->_model->where('parent_theme_code', $parent_theme_code)->get();
    }
}