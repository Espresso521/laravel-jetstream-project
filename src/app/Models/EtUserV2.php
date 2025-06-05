<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtUserV2 extends Model
{
    use HasFactory;

    protected $table = 'ET_USER_V2';
    protected $primaryKey = 'CHARGEID';   
    public $incrementing = false;         
    public $timestamps = false;           

    protected $fillable = [
        'CHARGEID',      // 担当者番号
        'CHARGE',        // 表示用担当者名（全角５０文字）
        'USERNAME',      // ユーザー名（半角５０文字）
        'PASS',          // パスワード（半角１０文字）
        'DISPTYPE',      // 検索コンボ表示
        'AUTHORITY',     // １：指導 ２：指導＋帳票 ３：指導＋帳票＋ﾃﾞｰﾀ処理 ４：帳票	５：帳票＋ﾃﾞｰﾀ処理 ６：ﾃﾞｰﾀ処理 ７：全権限								
        'AUTHORITYSUB',  // 続柄別表示、等を複合権限として設定
        'JUDGEMENTAREA', // 判定地区
        'SUPERUSER',     // ０：通常　１：管理者
        'UPDATETIME',    // 更新日時(yyyymmddhhMMss)
        'UPDATEUSER',    // 更新者(ﾛｸﾞｲﾝﾕｰｻﾞID)
    ];
}
