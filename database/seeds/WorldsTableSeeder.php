<?php

use Illuminate\Database\Seeder;

class WorldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('worlds')->insert([
            'id' => 1,
            'datacenter_id' => 1,
            'name'  => 'Aegis',
        ]);
        DB::table('worlds')->insert([
            'id' => 2,
            'datacenter_id' => 1,
            'name'  => 'Atomus',
        ]);
        DB::table('worlds')->insert([
            'id' => 3,
            'datacenter_id' => 1,
            'name'  => 'Carbuncle',
        ]);
        DB::table('worlds')->insert([
            'id' => 4,
            'datacenter_id' => 1,
            'name'  => 'Garuda',
        ]);
        DB::table('worlds')->insert([
            'id' => 5,
            'datacenter_id' => 1,
            'name'  => 'Gungnir',
        ]);
        DB::table('worlds')->insert([
            'id' => 6,
            'datacenter_id' => 1,
            'name'  => 'Kujata',
        ]);
        DB::table('worlds')->insert([
            'id' => 7,
            'datacenter_id' => 1,
            'name'  => 'Ramuh',
        ]);
        DB::table('worlds')->insert([
            'id' => 8,
            'datacenter_id' => 1,
            'name'  => 'Tonberry',
        ]);
        DB::table('worlds')->insert([
            'id' => 9,
            'datacenter_id' => 1,
            'name'  => 'Typhon',
        ]);
        DB::table('worlds')->insert([
            'id' => 10,
            'datacenter_id' => 1,
            'name'  => 'Unicorn',
        ]);
        DB::table('worlds')->insert([
            'id' => 11,
            'datacenter_id' => 2,
            'name'  => 'Alexander',
        ]);
        DB::table('worlds')->insert([
            'id' => 12,
            'datacenter_id' => 2,
            'name'  => 'Bahamut',
        ]);
        DB::table('worlds')->insert([
            'id' => 13,
            'datacenter_id' => 2,
            'name'  => 'Durandal',
        ]);
        DB::table('worlds')->insert([
            'id' => 14,
            'datacenter_id' => 2,
            'name'  => 'Fenrir',
        ]);
        DB::table('worlds')->insert([
            'id' => 15,
            'datacenter_id' => 2,
            'name'  => 'Ifrit',
        ]);
        DB::table('worlds')->insert([
            'id' => 16,
            'datacenter_id' => 2,
            'name'  => 'Ridill',
        ]);
        DB::table('worlds')->insert([
            'id' => 17,
            'datacenter_id' => 2,
            'name'  => 'Tiamat',
        ]);
        DB::table('worlds')->insert([
            'id' => 18,
            'datacenter_id' => 2,
            'name'  => 'Ultima',
        ]);
        DB::table('worlds')->insert([
            'id' => 19,
            'datacenter_id' => 2,
            'name'  => 'Valefor',
        ]);
        DB::table('worlds')->insert([
            'id' => 20,
            'datacenter_id' => 2,
            'name'  => 'Yojimbo',
        ]);
        DB::table('worlds')->insert([
            'id' => 21,
            'datacenter_id' => 2,
            'name'  => 'Zeromus',
        ]);
        DB::table('worlds')->insert([
            'id' => 22,
            'datacenter_id' => 3,
            'name'  => 'Anima',
        ]);
        DB::table('worlds')->insert([
            'id' => 23,
            'datacenter_id' => 3,
            'name'  => 'Asura',
        ]);
        DB::table('worlds')->insert([
            'id' => 24,
            'datacenter_id' => 3,
            'name'  => 'Belias',
        ]);
        DB::table('worlds')->insert([
            'id' => 25,
            'datacenter_id' => 3,
            'name'  => 'Chocobo',
        ]);
        DB::table('worlds')->insert([
            'id' => 26,
            'datacenter_id' => 3,
            'name'  => 'Hades',
        ]);
        DB::table('worlds')->insert([
            'id' => 27,
            'datacenter_id' => 3,
            'name'  => 'Ixion',
        ]);
        DB::table('worlds')->insert([
            'id' => 28,
            'datacenter_id' => 3,
            'name'  => 'Mandragora',
        ]);
        DB::table('worlds')->insert([
            'id' => 29,
            'datacenter_id' => 3,
            'name'  => 'Masamune',
        ]);
        DB::table('worlds')->insert([
            'id' => 30,
            'datacenter_id' => 3,
            'name'  => 'Pandemonium',
        ]);
        DB::table('worlds')->insert([
            'id' => 31,
            'datacenter_id' => 3,
            'name'  => 'Shinryu',
        ]);
        DB::table('worlds')->insert([
            'id' => 32,
            'datacenter_id' => 3,
            'name'  => 'Titan',
        ]);
    }
}
