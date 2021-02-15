<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class AjaxCrud extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'image'
    ];

    public function getFirstNameAttribute($value) {
        return Crypt::decryptString($value);
    }

    public function getLastNameAttribute($value) {
        return Crypt::decryptString($value);
    } 
    
    public function getImageAttribute($value) {
        return Crypt::decryptString($value);
    }

    public function setFirstNameAttribute($value) {
        $this->attributes['first_name'] = Crypt::encryptString($value);
    }

    public function setLastNameAttribute($value) {
        $this->attributes['last_name'] = Crypt::encryptString($value);
    }
    
    public function setImageAttribute($value) {
        $this->attributes['image'] = Crypt::encryptString($value);
    }

}
