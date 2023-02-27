<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class FigureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('figures')->insert([
            'url' => 'https://res.cloudinary.com/dsh8ljxiv/image/upload/v1676871345/cld-sample-5.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
