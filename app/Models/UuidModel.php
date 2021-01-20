<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

abstract class UuidModel extends Model
{
    use Uuid;
}
