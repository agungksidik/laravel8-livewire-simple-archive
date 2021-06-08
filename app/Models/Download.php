<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = ['history_document_id', 'user_id', 'action'];

    public function h_document() {
        return $this->belongsTo(History_document::class, 'id');
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
