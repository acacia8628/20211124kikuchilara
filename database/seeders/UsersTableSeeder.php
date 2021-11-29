<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'ziro',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'goro',
        ];
        $user = new User;
        $user->fill($param)->save();
    }
}
