<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorityMenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ET_AUTHORITYMENU')->truncate();

        $authorityId = 1;
        $menuSubMenuMap = [
            1 => [1, 2, 3, 4, 5, 6],
            2 => [1, 2, 3, 4, 5, 6, 7, 8, 9],
            3 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            4 => [1, 2, 3, 4],
            5 => [1, 2, 3, 4, 5],
            6 => [1, 2, 3, 4, 5, 6, 7, 8],
            7 => [1, 2, 3, 4, 5],
            8 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
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
