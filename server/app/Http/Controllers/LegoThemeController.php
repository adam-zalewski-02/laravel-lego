<?php

namespace App\Http\Controllers;

use App\Models\LegoSubTheme;
use App\Models\LegoTheme;
use App\Modules\Themes\ThemeService;
use Illuminate\Http\Request;

class LegoThemeController extends Controller
{
    private $_service;

    public function __construct(ThemeService $service)
    {
        $this->_service = $service;
    }

    public function getThemes(Request $request) {
        $pages = $request->get("pages", 10);

        if ($pages = 0) {
            return response()->json(['error' => 'No themes found.'], 404);
        }

        return ["data" => $this->_service->all($pages)];
    }

    
}
