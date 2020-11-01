<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    protected $table = 'form_models';

    use HasFactory;

    public function user()
    {
        // return $this->belongsto('App\Models\User');
        return $this->belongsto(User::class);
    }
}
