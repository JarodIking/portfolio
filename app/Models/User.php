<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function verify(Request $request)
    {
        $user = $this->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put([
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'username' => $user->username,
                'email', $user->email,
            ]);
            dd(session('id'));
            return true;
        }

        return false;
    }

}
