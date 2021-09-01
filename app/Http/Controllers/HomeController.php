<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('nim')){
            $nim = $request->session()->get('nim');
		}

        $mk = Matakuliah::all();
        
        // if($request->session()->has('nim')){
		// 	echo $request->session()->get('nim');
        //     echo $request->session()->get('name');
		// }else{
		// 	echo 'Tidak ada data dalam session.';
		// }

        return view('home')->with([
            'nim' => $nim,
        ]);
    }
}
