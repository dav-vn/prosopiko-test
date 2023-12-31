<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
    ];

    public function users(): void
    {
        $this->belongsTo('users');
    }
}
