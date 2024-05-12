<?php

namespace App\Models;

use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodDonor extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'body_weight',
        'email',
        'address',
        'country',
        'city',
        'contact',
        'voluntary_group',
        'new_donor',
        'donor_image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bloodDonors()
    {
        return $this->hasMany(BloodDonor::class);
    }
    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
    public function likes()
    {
        return $this->belongsToMany(User::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function isLiked()
    {
        if(auth()->check())
        {
            return auth()->user()->likes->contains('id',$this->id);
        }

    }
}
