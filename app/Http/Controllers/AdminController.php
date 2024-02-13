<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $tables = \File::files(rtrim(getcwd(), 'public').'\app\Models');
        return view('Admin/dashboard', compact('tables'));
    }

    // public function datatable()
    // {
    //     $dir = "\\App\\Models\\".str_replace("_", "", $class);
    //     $datas = $dir::all();$filesInFolder = \File::files('folder');     
    //     foreach($filesInFolder as $path) { 
    //         $file = pathinfo($path);
    //         echo $file['filename'] ;
    //     }
    //     for($i=0;$i<count($fk[$class]);$i++) {
    //         $dir2 = "\\App\\Models\\".str_replace("_", "", $fk[$class][$i]);
    //         $fks[$fk[$class][$i]] = $dir2::all();
    //         $q = "DESCRIBE ".$fk[$class][$i]."s";
    //         $colname[$fk[$class][$i]] = DB::select($q);
    //     }
    //     if(!isset($fks)) {
    //         $fks = "";
    //         $colname = "";
    //     }
    //     $query = "DESCRIBE ".$class."s";
    //     $desc = DB::select($query);
    //     return view('admin_data', compact('datas', 'class', 'desc', 'fks', 'colname'));
    // }
}
