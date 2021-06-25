<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_document extends Model
{
    use HasFactory;

    protected $fillable = ['document_id', 'path', 'file', 'slug', 'user_id'];

    public function document() {
        return $this->belongsTo(Document::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
