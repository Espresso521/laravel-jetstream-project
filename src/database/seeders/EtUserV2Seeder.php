<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EtUserV2;

class EtUserV2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EtUserV2::create([
            'CHARGEID' => 'C001',
            'CHARGE' => 'HUZE',
            'USERNAME' => 'Espresso521',
            'PASS' => 'pass123',
            'DISPTYPE' => '1',
            'AUTHORITY' => '1',
            'AUTHORITYSUB' => '0',
            'JUDGEMENTAREA' => 'A',
            'SUPERUSER' => '1',
            'UPDATETIME' => now()->format('YmdHis'),
            'UPDATEUSER' => 'admin',
        ]);

        EtUserV2::create([
            'CHARGEID' => 'C002',
            'CHARGE' => '金子',
            'USERNAME' => 'かねこ',
            'PASS' => '321abc',
            'DISPTYPE' => '2',
            'AUTHORITY' => '1',
            'AUTHORITYSUB' => '1',
            'JUDGEMENTAREA' => 'B',
            'SUPERUSER' => '1',
            'UPDATETIME' => now()->format('YmdHis'),
            'UPDATEUSER' => 'test',
        ]);
    }
}
