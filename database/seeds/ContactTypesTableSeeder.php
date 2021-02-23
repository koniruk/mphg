<?php

use Illuminate\Database\Seeder;

class ContactTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_types')->insert([
            'id'              => 1,
            'name'             => 'お問い合わせ',
        ]);
        DB::table('contact_types')->insert([
            'id'              => 2,
            'name'             => '代行依頼',
        ]);
    }
}
