<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function function1()
    {
        $use = 1;
        do {
            echo "The number is: $use <br>";
            $use++;
        } while ($use <= 5);
        for ($use = 0; $use <= 100; $use += 10) {
            echo "The number is: $use <br>";
        }
        return false;
    }

    public function Function2Check()
    {
        $t1 = [];
        $t2 = [
            'fruits' => 'apple',
                'vehicles' => 'cars',
        ];

        return $t2;
    }
}
