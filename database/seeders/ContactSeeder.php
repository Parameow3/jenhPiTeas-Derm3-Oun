<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contact::create([
            'first_name' => 'Fist name 1',
            'last_name' => 'Last name 1',
            'phone' => 'phone 1',
            'email' => 'email1@email.com',
            'address' => 'City 1',
            'company_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Contact::create([
            'first_name' => 'Fist name 2',
            'last_name' => 'Last name 2',
            'phone' => 'phone 2',
            'email' => 'email2@email.com',
            'address' => 'City 2',
            'company_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
