<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {

    	$data_server = array(
    		'so' => preg_replace("/\r|\n/", "", shell_exec("cat /etc/issue") ),
    		'kernel' => preg_replace("/\r|\n/", "", shell_exec("uname -r") ),
    		'disk' => (double) shell_exec("df --total | awk '{usage=($4*100)/$2} END {print usage}'"),
    		'ram_use' => (double) shell_exec("free -m -h -t | grep T | awk '{usage=($3*100)/$2} END {print usage}'"),
    		'cpu_use' => (double) shell_exec("grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage}'"),
    		'ip_public' => preg_replace("/\r|\n/", "", shell_exec('curl ifconfig.me')),
    		'ip_private' => preg_replace("/\r|\n/", "", shell_exec("hostname -I | awk '{print $1}'
"))
    	);


        return view('frontend.main.index', $data_server);
    }

    public function configure(Request $request) {

        return view('frontend.main.configure');
    }
}
