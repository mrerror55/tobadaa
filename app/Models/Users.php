<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Users
 * @package App\Models
 * @version September 6, 2021, 11:14 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 */
class Users extends Model
{

    use HasFactory;

    public $table = 'users';




    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
        'last_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
        'email' => 'required|email|unique:users,email',
        'password' => 'sometimes|required'
    ];


}
