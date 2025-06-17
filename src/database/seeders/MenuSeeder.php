<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ET_MENU')->insert([
            [
                'MENUID' => 1,
                'MENUNAME' => '事前準備と受診券発行',
                'CAPTION' => '事前準備と受診券発行',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 2,
                'MENUNAME' => '対象者の選定と利用券発行',
                'CAPTION' => '対象者の選定と利用券発行',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 3,
                'MENUNAME' => '健診結果と保健指導結果管理',
                'CAPTION' => '健診結果と保健指導結果管理',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 4,
                'MENUNAME' => '決済情報処理',
                'CAPTION' => '決済情報処理',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 5,
                'MENUNAME' => '次年度計画の作成と結果集計',
                'CAPTION' => '次年度計画の作成と結果集計',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 6,
                'MENUNAME' => 'データ処理',
                'CAPTION' => 'データ処理',
                'COLORCHANGEFLG' => '0',
            ],
            [
                'MENUID' => 7,
                'MENUNAME' => '健診管理',
                'CAPTION' => '健診管理',
                'COLORCHANGEFLG' => '1',
            ],
            [
                'MENUID' => 8,
                'MENUNAME' => '環境設定',
                'CAPTION' => '環境設定',
                'COLORCHANGEFLG' => '1',
            ],
            // [
            //     'MENUID' => 9,
            //     'MENUNAME' => '国への報告（実績報告）',
            //     'CAPTION' => '国への報告（実績報告）',
            //     'COLORCHANGEFLG' => '0',
            // ],
            // [
            //     'MENUID' => 10,
            //     'MENUNAME' => '閲覧用報告（随時報告）',
            //     'CAPTION' => '閲覧用報告（随時報告）',
            //     'COLORCHANGEFLG' => '0',
            // ],
        ]);
    }
}
