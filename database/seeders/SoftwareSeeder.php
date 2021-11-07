<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public function run()
    {   
        DB::table('software')->insert([
            'name' => 'Google Play Store',
            'code' => 'goog',
            'platform' => 'Mobile - Android',
            'description' => 'An store application by Google',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);

        DB::table('software')->insert([
            'name' => 'Kaspersky Total Security',
            'code' => 'KTS',
            'platform' => 'PC - Windows',
            'description' => 'Best antivirus software by KasperskyLAB',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);
       

    }
}
