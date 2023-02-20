<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    const IS_ADMIN = 1;
    const IS_WRITTER = 2;
    const IS_VIEWER = 3;

    protected $fillable = [
        'name',
    ];

    public function users(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
