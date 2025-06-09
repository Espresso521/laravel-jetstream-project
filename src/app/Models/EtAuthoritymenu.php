<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtAuthoritymenu extends Model
{
    use HasFactory;

    protected $table = 'ET_AUTHORITYMENU';
    protected $primaryKey = ['AUTHORITYID', 'MENU_ID', 'SUBMENU_ID'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'AUTHORITYID', // ユーザ権限Id
        'MENU_ID',     // メニューId
        'SUBMENU_ID',  // サブメニューId
    ];
}
