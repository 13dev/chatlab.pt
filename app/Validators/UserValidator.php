<?php

namespace App\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => ['required','max:40'],
            'email'  => ['required', 'email'],
            'password'=> ['required'],
        ],
        ValidatorInterface::RULE_UPDATE => [
            'email' => ['required'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'password' => ['nullable', 'min:8', 'confirmed'],
        ],
    ];
}
