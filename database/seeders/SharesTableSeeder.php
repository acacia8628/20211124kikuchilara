<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Share;

class SharesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'share' => 'test1'
        ];
        $share = new Share;
        $share->fill($param)->save();
        $param = [
            'share' => 'test2'
        ];
        $share = new Share;
        $share->fill($param)->save();
        $param = [
            'share' => 'test3'
        ];
        $share = new Share;
        $share->fill($param)->save();
    }
}
