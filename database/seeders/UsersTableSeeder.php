<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        $users = [
            [
                'name' => 'Afaq Ali',
                'father_name' => 'ABC',
                'cnic_number' => '7475646474464',
                'email' => 'afaq@gmail.com',
            ],
        ];


        foreach ($users as $user) {

            $model = new User();

            $model->name = $user['name'];
            $model->father_name = $user['father_name'];
            $model->cnic_number = $user['cnic_number'];
            $model->cell_number = '04322773377';
            $model->email = $user['email'];
            $model->password = \Hash::make('afaq123');
            $model->address = 'NA';

            $model->save();
        }
    }
}
