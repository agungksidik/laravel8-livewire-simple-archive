<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'path', 'file', 'slug'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function history() {
        return $this->hasMany(History_document::class)->latest();
    }
    public function lastHistory()
    {        
        return $this->hasOne(History_document::class)->orderBy('id', 'DESC');
    }
}
