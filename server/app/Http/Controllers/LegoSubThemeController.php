<?php

namespace App\Http\Controllers;

use App\Models\LegoSubTheme;
use App\Modules\Themes\SubThemeService;
use Illuminate\Http\Request;

class LegoSubThemeController extends Controller
{
    private $_service;
    public function __construct(SubThemeService $service)
    {
        $this->_service = $service;
    }


    public function getSubThemesByParentTheme($parent_theme_code) {
        $subThemes = $this->_service->getSubThemesByParentTheme($parent_theme_code);
        if ($subThemes->isEmpty()) {
            return response()->json([
                'error' => 'No themes found.'
            ],404);
        }
        return response()->json([
            'data' => $subThemes
        ], 200);
    }
}
