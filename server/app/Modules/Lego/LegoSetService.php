<?php
namespace App\Modules\Lego;

use App\Models\LegoSet;
use App\Models\LegoSetsLanguage;
use App\Modules\Core\Services\ServiceLanguages;

class LegoSetService extends ServiceLanguages {
 
    protected $_rules = [
        'set_number' => 'required',
        'theme_code' => 'required',
        'sub_theme_id' => 'numeric',
        'price' => 'required|numeric',
        'piece_count' => 'numeric',
        'minifigure_count' => 'numeric',
        'year' => 'numeric',
        'translations' => "required|array|min:1"
    ];

    protected $_rulesTranslations = [
        "language" => "required|string|min:2|max:2",
        "name" => "required|string|min:2|max:255",
        "description" => "required"
    ];

    public function __construct(LegoSet $model)
    {
        parent::__construct($model);
    }

    public function all($pages = 10) {
        $data = $this->_model
            ->with("translations")
            ->paginate($pages)
            ->withQueryString();

        return $data;
    }

    public function getSetsByTheme($themeCode, $pages = 10) {
        $data = $this->_model
            ->with("translations")
            ->where('theme_code', $themeCode)
            ->paginate($pages)
            ->withQueryString();
        return $data;
    }

    public function getSetByNumber($setNumber) {
        $data = $this->_model
            ->with("translations")
            ->where('set_number', $setNumber)
            ->first();
        return $data;
    }

    public function addSet($data) {
        $this->validate($data);
        if ($this->hasErrors()) {
            return;
        }

        $legoSet = $this->_model->create($data);
        foreach ($data['translations'] as $translation) {
            $legoSet->translations()->create($translation);
        }

        return $legoSet;
    }

    public function update($data, $setNumber) {
        unset($this->_rules['set_number']);
        $this->validate($data);
        if ($this->hasErrors()) {
            return;
        }
        $legoSet = $this->getSetByNumber($setNumber);
        $legoSet->update($data);
        foreach ($data['translations'] as $translation) {
            $legoSet->translations()->where('language', $translation['language'])->update($translation);
        }
        return $legoSet;
    }

    public function delete($setNumber) {
        if ($this->hasErrors()) {
            return;
        }
        $legoSet = $this->getSetByNumber($setNumber);
        $legoSet->translations()->delete();
        $legoSet->delete();
    }

    public function exists($setNumber) {
        return $this->_model->where('set_number', $setNumber)->exists();
    }
}