<?php

namespace App\Models;

use App\Models\Message;
use App\Models\BloodDonor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = ['from','to','blood_donor_id'];
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function BloodDonor()
    {
        return $this->belongsTo(BloodDonor::class);
    }
}
