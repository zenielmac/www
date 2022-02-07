<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\tbl_notice;

class HomeController extends Controller
{
    //
    public function index() {
        $menuNum = '1';
        $menuColor = 'blue';
        $year = Carbon::now()->timezone('Asia/Seoul')->format('Y');
        return view('index',['menuNum'=>$menuNum, 'menuColor'=>$menuColor, 'year'=>$year]);
    }

    //
    public function business() {
        $menuNum = '2';
        $menuColor = 'orange';
        $year = Carbon::now()->timezone('Asia/Seoul')->format('Y');
        return view('business',['menuNum'=>$menuNum, 'menuColor'=>$menuColor, 'year'=>$year]);
    }

    //
    public function community() {
        $tbl_notices = tbl_notice::where('idx','>','-1')->orderByRaw('reg_date desc')->paginate(9);

        $total = $tbl_notices->total();
        $perpage = $tbl_notices->perPage();
        $currentpage = $tbl_notices->currentPage();
        $count = 0;
        $tbl_notices->getCollection()->transform(function ($tbl_notices) use ($total, $perpage, $currentpage, &$count) {
            $tbl_notices->number = ($total - ($perpage * ($currentpage - 1))) - $count;
            $count++;
            return $tbl_notices;
        });

        $menuNum = '3';
        $menuColor = 'purple';
        $year = Carbon::now()->timezone('Asia/Seoul')->format('Y');
        return view('community',['menuNum'=>$menuNum, 'menuColor'=>$menuColor, 'year'=>$year, 'tbl_notices'=>$tbl_notices]);
    }

    //
    public function contacts() {
        $menuNum = '4';
        $menuColor = 'yellow';
        $year = Carbon::now()->timezone('Asia/Seoul')->format('Y');
        return view('contacts',['menuNum'=>$menuNum, 'menuColor'=>$menuColor, 'year'=>$year]);
    }

    //
    public function noticeList(){
        $tbl_notices = tbl_notice::where('idx','>','-1')->orderByRaw('reg_date desc')->paginate(9);

        $total = $tbl_notices->total();
        $perpage = $tbl_notices->perPage();
        $currentpage = $tbl_notices->currentPage();
        $count = 0;
        $tbl_notices->getCollection()->transform(function ($tbl_notices) use ($total, $perpage, $currentpage, &$count) {
            $tbl_notices->number = ($total - ($perpage * ($currentpage - 1))) - $count;
            $count++;
            return $tbl_notices;
        });

        echo json_encode($tbl_notices);
    }
}
