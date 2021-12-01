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
            'uid' => 'GgUBMi8nfUNLfyhoyS6Ob67bBWq2',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'ziro',
            'uid' => 'doJabZxLDUM8S4opgiTASCnHoWn2',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'goro',
            'uid' => 'gS6mZExfFkTvwTlj1CVGTtjU8Pt2',
        ];
        $user = new User;
        $user->fill($param)->save();
    }
}
