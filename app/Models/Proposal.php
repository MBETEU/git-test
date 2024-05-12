<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = ['blood_donor_id','validated'];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model){
            $model->user_id = auth()->user()->id;
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bloodDonor()
    {
        return $this->belongsTo(BloodDonor::class);
    }
    public function coverLetter(){
        return $this->hasOne(CoverLetter::class);
    }

}
