<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = ['document_id', 'user_id', 'action'];

    public function h_document() {
        return $this->belongsTo(History_document::class, 'history_document_id');
    }
    public function document() {
        return $this->belongsTo(Document::class, 'document_id');
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
