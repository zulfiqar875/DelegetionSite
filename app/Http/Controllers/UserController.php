<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Delegations;

class UserController extends Controller
{
    public function ind()
    {
        return view ('Secound');
    }

    public function insert(Request $request)
    {
        $lab = new User();
        $lab->visanumber = $request->visanumber;
        $lab->fullname = $request->fullname;
        $lab->nationalid = $request->nationalid;
        $lab->visaembassy = $request->visaembassy;
        $lab->date = $request->date;
        $lab->sponsoradd = $request->sponsoradd;
        $lab->personaccount = $request->personaccount;
        $lab->occupation = $request->occupation;
        $lab->nationality = $request->nationality;
        $lab->visaissue = $request->visaissue;
        $lab->remainingac = $request->remainingac;
        $lab->save();
        return view ('RegisterMsg');
        
    }



    public function Search (Request $com)
    {
        $found= User::where('visanumber', $com->visa)->where('nationalid', $com->sponsor)->first();
        if($found!=Null)
        {
            $dele= Delegations::where('visanumber',$com->visa);
            $dele= $found->Delegations;
            return view('person',compact('found','dele'));
        }
        else
        {
            return view('fourth');
        }
    }



    public function person()
    {
        // return view('Person');
        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
    }
    public function newdel($vid)
    {
        $found = User::where('visanumber',$vid)->first();
        return view('adddelegation',compact('found'));
    }
    public function display ()
    {
        $bank = User::all();
        return view ('Display')->with('bank', $bank);
    }

    public function perdis()
    {
        $bank = User::all();
        return view ('Person')->with('bank', $bank);
    }


}
