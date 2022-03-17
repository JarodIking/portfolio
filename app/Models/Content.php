<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tabs',
        'title',
        'sub_title',
        'description',
        'form',
        'to',
        'link',
        'deleted',
        'list_title',
    ];

    public function listitem()
    {
        return $this->hasMany(Listitem::class, 'contents')->with('icon');
    }

    public function social()
    {
        return $this->hasMany(Social::class, 'contents')->with('icon');
    }

}
