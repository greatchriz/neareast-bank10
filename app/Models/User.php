<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Balance;
use App\Models\History;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function generate_account_number() {
        $number = mt_rand(3000000000, 3900000000);
        return $number;
    }

    public function account()
    {
        $number = $this->generate_account_number();

        $numberExist = User::where('id', $number)->first();

        if ($numberExist) {
            $this->generate_account_number();
        }

        return $number;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    /**
     * Get all of the histories for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function histories()
    {
        return $this->hasMany(History::class)->latest();
    }
}
