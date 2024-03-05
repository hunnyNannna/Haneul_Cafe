<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'title',
                'value' => 'Haneul Cafe Booking System'
            ],
            [
                'key' => 'email',
                'value' => 'haneulcafe@gmail.com'
            ],
            [
                'key' => 'location',
                'value' => 'Haneul Cafe, KLCC'
            ],
            [
                'key' => 'phone',
                'value' => '012-4568910'
            ],
            [
                'key' => 'working_hours',
                'value' => '10:00 AM - 10:00 PM'
            ],
            [
                'key' => 'describe',
                'value' => 'Looking for a Place to organize an event? We are your Solution!'
            ],
            [
                'key' => 'logo',
                'value' => 'haneul.png'
            ],
            [
                'key' => 'icon',
                'value' => 'haneul.png'
            ],
            [
                'key' => 'facebook',
                'value' => '#'
            ],
            [
                'key' => 'twitter',
                'value' => '#'
            ],
            [
                'key' => 'instagram',
                'value' => '#'
            ],
            [
                'key' => 'youtube',
                'value' => '#'
            ]
        ];

        foreach ($settings as $setting) {
            \App\Models\Settings::firstOrCreate($setting);
        }
    }
}
