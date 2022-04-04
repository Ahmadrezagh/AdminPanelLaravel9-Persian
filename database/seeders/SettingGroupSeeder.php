<?php

namespace Database\Seeders;

use App\Models\SettingGroup;
use Illuminate\Database\Seeder;

class SettingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            'وبسایت',
            'درباره ما',
            'تماس با ما',
            'سئو',
        ];
        foreach ($groups as $group)
        {
            SettingGroup::create([
                'name' => $group
            ]);
        }
    }
}
