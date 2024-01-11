<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Package extends Model
{
    use HasRichText;

    protected $guarded = [];

    protected $richTextFields = [
        'body',
    ];

    // protected $fillable = ['name','price','image'];
}
