<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function mainMenu(Request $request)
    {
        $loginUserId = $request->input('login_user_id'); 

        $menus = DB::table('ET_USER_V2 as T1')
            ->join('ET_AUTHORITYMENU as T2', 'T1.AUTHORITY', '=', 'T2.AUTHORITYID')
            ->join('ET_MENU as T3', 'T2.MENUID', '=', 'T3.MENUID')
            ->where('T1.CHARGEID', $loginUserId)
            ->select('T3.MENUID', 'T3.MENUNAME', 'T3.CAPTION', 'T3.COLORCHANGEFLG')
            ->groupBy('T3.MENUID', 'T3.MENUNAME', 'T3.CAPTION', 'T3.COLORCHANGEFLG')
            ->orderBy('T3.MENUID')
            ->get();

        return response()->json($menus);
    }

    public function subMenu(Request $request)
    {
        $loginUserId = $request->input('login_user_id'); 

        $subMenus = DB::table('ET_USER_V2 as T1')
            ->join('ET_AUTHORITYMENU as T2', 'T1.AUTHORITY', '=', 'T2.AUTHORITYID')
            ->join('ET_SUBMENU as T3', function ($join) {
                $join->on('T2.MENUID', '=', 'T3.MENUID')
                    ->on('T2.SUBMENUID', '=', 'T3.SUBMENUID');
            })
            ->where('T1.CHARGEID', $loginUserId)
            ->select('T3.MENUID', 'T3.SUBMENUID', 'T3.SUBMENUNAME', 'T3.PROGRAMNAME', 'T3.PARAM', 'T3.SCREENNAME', 'T3.CAPTION', 'T3.EXCLUSIVELEVEL', 'T3.EXCLUSIVEGROUP')
            ->orderBy('T3.MENUID')
            ->orderBy('T3.SUBMENUID')
            ->get();

        return response()->json($subMenus);
    }
}
