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
            [ 'MENUID' => 2, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定保健指導対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導対象除外者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定保健指導利用対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 4, 'SUBMENUNAME' => '利用券発行', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 5, 'SUBMENUNAME' => '外部委託保健指導対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 6, 'SUBMENUNAME' => '直接実施保健指導対象者の登録', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 7, 'SUBMENUNAME' => '利用券登録用フォーム作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 8, 'SUBMENUNAME' => '利用券発行履歴', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 2, 'SUBMENUID' => 9, 'SUBMENUNAME' => '特定保健指導判定状況・一括階層化', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 3️⃣ 健診結果と保健指導結果管理
            ['MENUID' => 3, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診結果閲覧', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導データ閲覧', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診未受診者の抽出', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 4, 'SUBMENUNAME' => '特定保健指導未利用者の抽出', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 5, 'SUBMENUNAME' => '健診データCSV取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 6, 'SUBMENUNAME' => '健診／保健指導データXML取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 7, 'SUBMENUNAME' => '健診データ入力', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 8, 'SUBMENUNAME' => '健診データ修正', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 9, 'SUBMENUNAME' => '健診データCSV取込エラー修正', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 10, 'SUBMENUNAME' => '健診データXML取込エラー修正', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],
            ['MENUID' => 3, 'SUBMENUID' => 11, 'SUBMENUNAME' => '保険者問異動', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0'],

            // 4️⃣ 決済情報処理
            [ 'MENUID' => 4, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診・決済', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定保健指導・決済', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診・返戻', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 4, 'SUBMENUID' => 4, 'SUBMENUNAME' => '特定保健指導・返戻', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 5️⃣ 次年度計画の作成と結果集計
            [ 'MENUID' => 5, 'SUBMENUID' => 1, 'SUBMENUNAME' => '特定健診・集計', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 5, 'SUBMENUID' => 2, 'SUBMENUNAME' => '特定健診・計画策定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 5, 'SUBMENUID' => 3, 'SUBMENUNAME' => '特定健診・保健事業各種分析', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 5, 'SUBMENUID' => 4, 'SUBMENUNAME' => '保健指導機関別実績一覧', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 5, 'SUBMENUID' => 5, 'SUBMENUNAME' => '特定保健指導判定分布表', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 6️⃣ データ処理
            [ 'MENUID' => 6, 'SUBMENUID' => 1, 'SUBMENUNAME' => '健診／保健指導機関データ取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 2, 'SUBMENUNAME' => '健診／保健指導機関設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 3, 'SUBMENUNAME' => '契約健診機関設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 4, 'SUBMENUNAME' => '契約保健指導機関設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 5, 'SUBMENUNAME' => '継続者登録／解除', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 6, 'SUBMENUNAME' => '個人情報振替', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 7, 'SUBMENUNAME' => '個人情報削除', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 6, 'SUBMENUID' => 8, 'SUBMENUNAME' => '郵便番号マスタ取込', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 7️⃣ 健診管理
            [ 'MENUID' => 7, 'SUBMENUID' => 1, 'SUBMENUNAME' => '健診結果閲覧', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 2, 'SUBMENUNAME' => '未受診者の抽出', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 3, 'SUBMENUNAME' => '集計表作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 4, 'SUBMENUNAME' => '統計グラフ作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 7, 'SUBMENUID' => 5, 'SUBMENUNAME' => '報告書作成', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],

            // 8️⃣ 環境設定
            [ 'MENUID' => 8, 'SUBMENUID' => 1, 'SUBMENUNAME' => 'ユーザ設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 2, 'SUBMENUNAME' => '系統項目設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 3, 'SUBMENUNAME' => '健診項目設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 4, 'SUBMENUNAME' => '健診項目別・判定レベル設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 5, 'SUBMENUNAME' => '健診項目別・判定レベル設定（受診勧奨値）', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 6, 'SUBMENUNAME' => '保健指導コース設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 7, 'SUBMENUNAME' => '質問表項目設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 8, 'SUBMENUNAME' => '経年グラフ項目設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 9, 'SUBMENUNAME' => '動作環境設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
            [ 'MENUID' => 8, 'SUBMENUID' => 10, 'SUBMENUNAME' => 'システム基本情報設定', 'PROGRAMNAME' => '', 'PARAM' => '', 'SCREENNAME' => '', 'CAPTION' => '', 'EXCLUSIVELEVEL' => '0', 'EXCLUSIVEGROUP' => '0' ],
        ]);
    }
}
