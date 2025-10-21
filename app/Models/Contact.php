<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
      protected $fillable = ['name', 'email', 'subject', 'message','tag_id'];
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    public function tag()
    {
          return $this->belongsTo(Tag::class);
    }

}
