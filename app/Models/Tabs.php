<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'deleted',
        'updated',
    ];

    public function content()
    {
        return $this->hasMany(Content::class, 'tabs')->with(['listitem', 'social']);
    }

}
