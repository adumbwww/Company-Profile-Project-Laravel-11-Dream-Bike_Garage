<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_paragraph',
        'second_paragraph',
        'what_we_offer_1',
        'what_we_offer_2',
        'what_we_offer_3'
    ];
}
