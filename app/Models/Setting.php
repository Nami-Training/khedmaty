<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'location',
        'currency',
        'email',
        'phone',
        'other_phone',
        'twitter',
        'facebook',
        'instagram',
        'logo_header',
        'logo_footer',
        'favicon',
        'aboutus_image',
        'terms_conditions',
        'privacy',
        'about_app',
        'footer_text',
    ];

    public static function checkSettings()
    {
        $setting = Self::all();

        if(count($setting) < 1){
            $data = [
                'id' => 1,
                'website_name' => 'Web site name...',
                'location' => 'Web site location...',
                'currency' => 'Web site currency...',
                'email' => 'Web site email...',
                'phone' => 'Web site phone...',
                'other_phone' => 'Web site other phone...',
                'twitter' => '#',
                'facebook' => '#',
                'instagram' => '#',
                'logo_header' => 'attachments/setting/logo.svg',
                'logo_footer' => 'attachments/setting/footer_bg.jpg',
                'favicon' => 'attachments/setting/favicon.svg',
                'aboutus_image' => 'attachments/setting/about-us.jpg',
                'terms_conditions' => 'Web site terms conditions...',
                'privacy' => 'Web site privacy...',
                'about_app' => 'Web site about app...',
                'footer_text' => 'Web site footer text...',
            ];

            self::create($data);
        }

        return self::first();
    }
}
