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
            2 => [1, 2, 3, 4, 5],                 
            3 => [1, 2, 3, 4, 5],
            4 => [1, 2, 3, 4],
            5 => [1, 2],
            6 => [1, 2, 3],
            7 => [1, 2, 3],
            8 => [1, 2, 3],
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