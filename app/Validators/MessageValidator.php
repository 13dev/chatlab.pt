<?php

namespace App\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class MessageValidator extends LaravelValidator
{
    protected $rules = [
        'thread_id' => 'required',
        'user_id'  => 'required',
        'body'=> 'required|max:5000',
    ];
}
