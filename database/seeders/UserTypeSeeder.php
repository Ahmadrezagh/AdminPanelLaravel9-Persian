<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Super Admin',
            'Admin',
            'User',
        ];
        foreach ($types as $type)
        {
            Type::create([
               'name' => $type
            ]);
        }
    }
}
