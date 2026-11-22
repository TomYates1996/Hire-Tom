<?php

return [
    'site_name' => 'Hire Tom',
    'site_owner' => 'TomCorp',
    'address' => '1 CMS Street',
    'city' => 'Hull',
    'phone' => '',
    'email' => 'twyates@proton.me', 
    'form_email_recipient' => 'tomwozere2k5@gmail.com', 
    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
        'alt_text_enabled' => env('AI_ALT_TEXT_ENABLED', false),
    ],
    'blog' => true,
    'blog_page' => 'blog',
    'events' => true,
    'listings' => true,
    'products' => true,
    'categories' => true,
    'coupons' => true,
    'bookings' => true,
    'generate_site' => false,
];
