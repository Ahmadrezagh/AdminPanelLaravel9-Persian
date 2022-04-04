<?php

namespace Database\Seeders;

use App\Models\Setting;
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
            [   'name' => 'name',
                'type'=>'string',
                'description'=>'نام وبسایت',
                'value'=>'پنل ادمین لاراول ۹',
                'setting_group_id'=>'1'
            ],
            [   'name' => 'logo',
                'type'=>'file',
                'description'=>'لوگو',
                'value'=>'/uploads/settings/logo.png',
                'setting_group_id'=>'1'
            ],
            [   'name' => 'url',
                'type'=>'string',
                'description'=>'آدرس وبسایت',
                'value'=>'http://localhost:8000',
                'setting_group_id'=>'1'
            ],

            [   'name' => 'terms',
                'type'=>'textarea',
                'description'=>'قوانین استفاده از وبسایت',
                'value'=>'<p>قوانین استفاده از وبسایت را اینجا بنویسید....</p>',
                'setting_group_id'=>'2'
            ],
            [   'name' => 'about_us',
                'type'=>'textarea',
                'description'=>'درباره ما',
                'value'=>'<p>متن درباره ما ...</p>',
                'setting_group_id'=>'2'
            ],
            [   'name' => 'contact_us',
                'type'=>'textarea',
                'description'=>'تماس با ما',
                'value'=>'<p>متن تماس با ما...</p>',
                'setting_group_id'=>'3'
            ],
            [   'name' => 'email',
                'type'=>'string',
                'description'=>'ایمیل',
                'value'=>'support@site.com',
                'setting_group_id'=>'2'
            ],
            [   'name' => 'phone',
                'type'=>'string',
                'description'=>'شماره تماس',
                'value'=>'+98 021 123456',
                'setting_group_id'=>'2'
            ],
        ];
        foreach ($settings as $setting)
        {
            Setting::create($setting);
        }
        //
    }
}
