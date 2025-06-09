<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ET_SUBMENU')->truncate();

        DB::table('ET_SUBMENU')->insert([

            // 1️⃣ 事前準備と受診券発行
            [ 'MENUID' => 1, 'SUBMENUID' => 1, 'SUBMENUNAME' => '健診対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 1, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定健診対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 1, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診非対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 1, 'SUBMENUID' => 4, 'SUBMENUNAME' => '受診券発行', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 1, 'SUBMENUID' => 5, 'SUBMENUNAME' => '受診券登録用フォーム作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 1, 'SUBMENUID' => 6, 'SUBMENUNAME' => '受診券発行履歴', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 2️⃣ 対象者の選定と利用券発行
            [ 'MENUID' => 2, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定健診非対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 3, 'SUBMENUNAME' => '利用券発行', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 4, 'SUBMENUNAME' => '利用券発行履歴', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 5, 'SUBMENUNAME' => '特定保健指導利用状況・一括履歴作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 3️⃣ 健診結果と保健指導結果管理
            [ 'MENUID' => 3, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診結果集計', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 3, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定健診・集計設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 3, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診未受診者分析', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 3, 'SUBMENUID' => 4, 'SUBMENUNAME' => '保健指導利用状況一覧', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 3, 'SUBMENUID' => 5, 'SUBMENUNAME' => '特定健診指導記録分析表', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 4️⃣ 決済情報処理
            [ 'MENUID' => 4, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診受診決済', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導決済', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診・返戻', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 4, 'SUBMENUNAME' => '特定保健指導・返戻', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 5️⃣ 次年度計画の作成と結果集計
            [ 'MENUID' => 5, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診結果', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 5, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導結果', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 6️⃣ データ処理
            [ 'MENUID' => 6, 'SUBMENUID' => 1, 'SUBMENUNAME' => 'CSV取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 2, 'SUBMENUNAME' => '健診データ入力', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 3, 'SUBMENUNAME' => '健診データ取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 7️⃣ 健診管理
            [ 'MENUID' => 7, 'SUBMENUID' => 1, 'SUBMENUNAME' => 'ユーザ設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 2, 'SUBMENUNAME' => '受診者設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 3, 'SUBMENUNAME' => 'システム基本情報設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 8️⃣ 環境設定
            [ 'MENUID' => 8, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診データチェック', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導データチェック', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 3, 'SUBMENUNAME' => '国への報告', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
        ]);
    }
}