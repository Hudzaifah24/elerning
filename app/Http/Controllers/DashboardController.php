<?php

namespace App\Http\Controllers;

use App\Traits\ipaymu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ipaymu;
    
    public function index() {
        //Response
        $balance = $this->balance();
        // dd($balance);
        if($balance->Status == 200) {
            return view('pages.admin.dashboard', compact('balance'));
        } else {
            echo "Tidak Ada koneksi";
        }
            //End Response
    }
}
