<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
class adminController extends Controller
{
    //
    public function index(){
         $inscrit=User::whereValidation_2AndValidation_1(1,1)->get();
         $retrait=Transaction::with('user','pack')->whereTypeAndOk(2,0)->get();
         $demande=User::whereValidation_2AndValidation_1(0,1)->get();
         $transaction=Transaction::paginate(4);
         return view('admin.pages.index',compact('demande','inscrit','retrait','transaction'));
    }
    public function Viewinscription(){
         $inscription=User::whereValidation_2AndValidation_1(1,1)->paginate(3);
         return view('admin.pages.inscription',compact('inscription'));
    }
    public function Viewdemande(){

    }
    public function ActionSearch(){
        return view('admin.pages.search');
    }

    public function Viewtransaction($type){
        $informationTransaction=null;
        if($type=='depot'):
             $informationTransaction=Transaction::with('user','pack')->whereTypeAndOk(1,0)->get();
        else:
            $informationTransaction=Transaction::with('user','pack')->whereTypeAndOk(2,0)->get();
        endif;
        return view('admin.pages.transaction',compact('informationTransaction','type'));
    }
    public function LookingForTransaction($type){
        $informationTransaction=null;
        if($type=='depot'):
             $informationTransaction=Transaction::with('user','pack')->whereTypeAndOk(1,1)->get();
        else:
            $informationTransaction=Transaction::with('user','pack')->whereTypeAndOk(2,1)->get();
        endif;
        return view('admin.pages.verification',compact('informationTransaction','type'));
    }
    public function SetAsUnvailable(Request $request,$id){

        $request->session()->flash('success','Opération effectuée avec success');
        Transaction::whereId($id)->update(['ok'=>0]);
        return redirect()->back();

    }
    public function ActionConfirm(Request $request,$id){

        Transaction::whereId($id)->update(['ok'=>1]);
         $request->session()->flash('success','Opération effectuée avec success');
        return redirect()->back();
    }
    public function ViewProfil($id){

         $user=User::with('transaction')->whereId($id)->first();
         return view('admin.pages.profil',compact('user'));
    }


}
