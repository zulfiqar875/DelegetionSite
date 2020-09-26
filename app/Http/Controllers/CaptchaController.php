<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Delegations;

class CaptchaController extends Controller
{
    public function create()
    {
        return view('captchacreate');
    }
    public function captchaValidate(Request $com)
    {


        $found= User::where('visanumber', $com->visa)->where('nationalid', $com->sponsor)->first();
        if($found!=Null)
        {
            // $dele= Delegations::having('visanumber',$com->visa)->get();
            // $dele=Delegations::all();
            // $dele= Delegations::having('visanumber',$com->visa)->get();
            $dele= $found->Delegations;
            return view('person',compact('found','dele'));
            // return view('person',compact('found','dele'));
        }
        else
        {
            return view('fourth');
        }
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
