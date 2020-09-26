<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Delegations;
use App\User;
use DB;
use Webpatser\Uuid\Uuid;
class DelegationController extends Controller
{
    //
    public function delegationadd(Request $com, $visa)
    {
        $del = new Delegations();
        $now = Carbon::now();
        $del->DelegationID = $now->format('su');
        $del->visanumber = $visa;
        $del->AgencyName = $com->Agencyname;
        $del->Ratifed = (' ');
        $del->DelegationNumber = $now->format('idms');
        $user = User::where('visanumber', $visa)->get()->first();
//        return $user;
        $user->Delegations()->save($del);
        $del->save();
        return view ('payment',compact('del'));

        return view ('payment',compact('del', 'user'));

    }
    public function check()
    {
        // $uuid = Uuid::import('d3d29d70-1d25-11e3-8591-034165a3a613');
        // echo('$uuid');
        $del = new Delegations(); 
        print_r($del = IdGenerator::generate(['table' => 'Delegations','field'=>'DelegationID', 'length' => 8, 'prefix' =>'235467']));
        
    }

    public function paydel($delid)
    {
        $del = new Delegations();
        $del = Delegations::find($delid);
        return view ('payment',compact('del'));

    }

    public function Payment($visa)
    {
        $user = Delegations::where('DelegationID', $visa)->update(array('payment'=>'1'));
        

        // DB::table('Delegations')
        //     ->where('DelegationID', $DelegationID)
        //     ->update(['payment'=>'1']);
        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
    }

    public function Ratifed (Request $req)
    {
        $upd = Delegations::find($req->delegationid);
        $upd->Ratifed =  $req->ratifedname;
        $upd->save();
        // $user = Delegations::where('DelegationID', $$req->delegationid)->update(array('Ratifed'=>$req->ratifedname));
        // DB::table('Delegations')
        //     ->where('DelegationID', $req->delegationid)
        //     ->update(['Ratifed'=>$req->ratifedname]);
        // $check= Delegations::find($req->delegationid);
        // $check->Ratifed = $req->ratifedname;
        // $check->save;
        return view ('RegisterMsg');
    }
}
