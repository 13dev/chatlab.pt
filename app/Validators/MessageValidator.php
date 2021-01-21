<?php

namespace App\Validators;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class MessageValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'thread_id' => 'required',
            'sender_id'  => 'required',
            'body'=> 'required|max:5000'
        ]
    ];

}
