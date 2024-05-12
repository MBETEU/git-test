<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Message;
use App\Models\BloodDonor;
use App\Models\Conversation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

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
        'password' => 'hashed',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function bloodDonor()
    {
        return $this->BelongsToMany(BloodDonor::class);
    }
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
    public function likes()
    {
        return $this->belongsToMany(BloodDonor::class);
    }

    public function conversations()
    {
        return Conversation::where(function ($q){
            return $q->where('to', $this->id)
            ->orWhere('from', $this->id);
        });
    }
    public function getConversationAttribute()
    {
        return $this->conversations()->get();
    }
}
