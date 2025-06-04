<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;

    protected $table = 'ET_AUTHORITY';
    protected $primaryKey = 'AUTHORITYID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'AUTHORITYID',
        'AUTHORITYNAME',
    ];
}
