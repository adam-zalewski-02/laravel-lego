<?php
namespace App\Modules\User;

use App\Models\User;
use App\Modules\Core\Services\Service;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserService extends Service {

    protected $_rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ];

    protected $credentialRules = [
        'email' => 'required|string|email',
        'password' => 'required|string',
    ];

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function registerUser($data) {
        $this->validate($data);
        if ($this->hasErrors()) {
            return;
        }
        $data['password'] = Hash::make($data['password']);
        $user = $this->_model->create($data);
        return $user;
    }

    public function login($data) : ?string {
        $validator = Validator::make($data, $this->credentialRules);
        if ($validator->fails()) {
            return null;
        }

        $credentials = [
            'email' => $data['email'],
            'password' => $data['password']
        ];
        $token = auth()->attempt($credentials);
        return $token;
    }
}