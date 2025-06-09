<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ET_SUBMENU')->insert([
            [
                'MENUID' => 1,
                'SUBMENUID' => 1,
                'SUBMENUNAME' => '健診対象者の登録',
                'PROGRAMNAME' => 'Program1.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen1',
                'CAPTION' => '健診対象者の登録',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
            [
                'MENUID' => 1,
                'SUBMENUID' => 2,
                'SUBMENUNAME' => '特定健診対象者の登録',
                'PROGRAMNAME' => 'Program2.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen2',
                'CAPTION' => '特定健診対象者の登録',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
            [
                'MENUID' => 1,
                'SUBMENUID' => 3,
                'SUBMENUNAME' => '特定健診非対象者の登録',
                'PROGRAMNAME' => 'Program3.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen3',
                'CAPTION' => '特定健診非対象者の登録',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
            [
                'MENUID' => 1,
                'SUBMENUID' => 4,
                'SUBMENUNAME' => '受診券発行',
                'PROGRAMNAME' => 'Program4.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen4',
                'CAPTION' => '受診券発行',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
            [
                'MENUID' => 1,
                'SUBMENUID' => 5,
                'SUBMENUNAME' => '受診券登録用フォーム作成',
                'PROGRAMNAME' => 'Program5.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen5',
                'CAPTION' => '受診券登録用フォーム作成',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
            [
                'MENUID' => 1,
                'SUBMENUID' => 6,
                'SUBMENUNAME' => '受診券発行履歴',
                'PROGRAMNAME' => 'Program6.exe',
                'PARAM' => '',
                'SCREENNAME' => 'Screen6',
                'CAPTION' => '受診券発行履歴',
                'EXCLUSIVELEVEL' => '0',
                'EXCLUSIVEGROUP' => '0',
            ],
        ]);
    }
}