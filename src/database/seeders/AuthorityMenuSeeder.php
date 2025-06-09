<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorityMenuSeeder extends Seeder
{
    public function run(): void
    {
        $authorityId = 1;
        $menuSubMenuMap = [
            1 => [1, 2, 3, 4, 5, 6],
            2 => [1],                 
            3 => [1, 2],
            4 => [1, 2, 3],
            5 => [4],
            6 => [4, 5],
            7 => [4, 5, 6],
            8 => [1, 2, 4, 5, 6],
        ];

        foreach ($menuSubMenuMap as $menuId => $subMenuIds) {
            if (empty($subMenuIds)) {
                DB::table('ET_AUTHORITYMENU')->insert([
                    'AUTHORITYID' => $authorityId,
                    'MENUID' => $menuId,
                    'SUBMENUID' => 0, 
                ]);
            } else {
                foreach ($subMenuIds as $subMenuId) {
                    DB::table('ET_AUTHORITYMENU')->insert([
                        'AUTHORITYID' => $authorityId,
                        'MENUID' => $menuId,
                        'SUBMENUID' => $subMenuId,
                    ]);
                }
            }
        }
    }
}