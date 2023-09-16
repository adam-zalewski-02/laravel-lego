<?php

namespace App\Http\Controllers;

use App\Models\LegoSet;
use App\Models\LegoTheme;
use App\Modules\Lego\LegoSetService;
use Illuminate\Http\Request;

class LegoSetController extends Controller
{
    private $_service;
    public function __construct(LegoSetService $service)
    {
        $this->_service = $service;
    }


    public function getSets(Request $request) {
        $pages = $request->get("pages", 10);

        if ($pages = 0) {
            return response()->json(['error' => 'No sets found.'], 404);
        }

        return ["data" => $this->_service->all($pages)];
    }

    public function getSetsByTheme($themeCode) {
        $legoSets = $this->_service->getSetsByTheme($themeCode);

        if (empty($legoSets)) {
            return response()->json(['error' => 'No sets found.'], 404);
        }

        return response()->json([
            'data' => $legoSets
        ]);
    }

    public function getSet($setNumber) {
        $set = $this->_service->getSetByNumber($setNumber);

        if ($set === null) {
            return response()->json([
                'error' => "Lego set with set number '$setNumber' not found"
            ], 404);
        }

        return response()->json([
            'data' => $set
        ], 200);
    }

    public function addSet(Request $request) {
        $data = $request->all();
        $legoSet = $this->_service->addSet($data);

        if($this->_service->hasErrors()) {
            return response()->json([
                "errors" => $this->_service->getErrors(),
            ], 400);
        }

        return response()->json([
            'message' => 'Lego set saved successfully',
            'data' => $legoSet
        ], 201);
    }

    public function editSet(Request $request, $setNumber) {
        if (!$this->checkIfSetExists($setNumber)) {
            return response()->json([
                'error' => "Lego set with set number '$setNumber' not found"
            ], 404);
        }

        $data = $request->all();
        $legoSet = $this->_service->update($data, $setNumber);

        if ($this->_service->hasErrors()) {
            return response()->json([
                "errors" => $this->_service->getErrors(),
            ], 400);
        }

        return response()->json([
            'message' => 'Lego set updated successfully',
            'data' => $legoSet
        ], 200);
    }

    public function deleteSet($setNumber) {
        if (!$this->checkIfSetExists($setNumber)) {
            return response()->json([
                'error' => "Lego set with set number '$setNumber' not found"
            ], 404);
        }
        
        $this->_service->delete($setNumber);
    
        return response()->json([
            'message' => 'Lego set deleted successfully'
        ], 200);
    }
    
    public function checkIfSetExists($setNumber) {
        return $this->_service->exists($setNumber);
    }
}
