<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtMenu extends Model
{
    use HasFactory;

    protected $table = 'ET_MENU';
    protected $primaryKey = 'MENU_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MENU_ID',
        'MENU_NAME',
        'CAPTION',
        'COLOR_CHANGE_FLG',
    ];
}
