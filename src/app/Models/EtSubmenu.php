<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtSubmenu extends Model
{
    use HasFactory;

    protected $table = 'ET_SUBMENU';
    protected $primaryKey = ['MENU_ID', 'SUBMENU_ID'];
    public $incrementing = false;
    public $timestamps = false;

    /** 排他レベルの説明
    * 0: なし  
    * 1: システム全体で他の機能の起動を許可しない  
    * 2: 同一機能の起動を許可しない  
    * 3: 同一グループ内で起動されているものがあれば起動しない  
    * 4: 同一グループ内で3で起動されているものがあれば起動しない + 同一機能は起動できる  
    * 5: 同一グループ内で3で起動されているものがあれば起動しない + 同一機能の起動も許可しない  
    */
    protected $fillable = [
        'MENU_ID',            // メニューID
        'SUBMENU_ID',         // サブメニューID
        'SUBMENU_NAME',       // サブメニュー名称
        'PROGRAM_NAME',       // 実行プログラム名 (.exe, .dll など拡張子まで記載)
        'PARAM',              // 引数
        'SCREEN_NAME',        // 表示画面ID
        'CAPTION',            // 説明文
        'EXCLUSIVE_LEVEL',    // 排他レベル
        'EXCLUSIVE_GROUP',    // 排他グループ
    ];
}
