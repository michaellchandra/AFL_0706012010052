<?php

namespace Database\Seeders;

use App\Models\Software;
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
        $software = new Software();
        $software->name = 'Google';
        $software->code = 'goog';
        $software->platform = 'android';
        $software->description = 'An application by google';

    }
}
