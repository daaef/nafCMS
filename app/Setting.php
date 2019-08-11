<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['site_logo', 'site_title', 'site_description', 'footer_copywrite', 
        'footer_facebook', 'footer_twitter', 'footer_instagram'
    ];
}
