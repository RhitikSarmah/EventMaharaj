<?php

namespace App\Http\Controllers;

use Session;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{    
    public function portfolio(){
        $portfolio = Portfolio::orderBy('created_at','desc')->get();
        return view('portfolio')->with('portfolio',$portfolio);
    }
     public function search(Request $request){
        $search = $request->search;
        $portfolio = DB::table('portfolios')->where('name','LIKE','%'. $search . '%')->get();
        return view('dashboard.adminpanel',['portfolio'=>$portfolio]);
    }
    public function adminpanel(){
        $portfolio = Portfolio::orderBy('created_at','desc')->get();
        return view('dashboard.adminpanel')->with('portfolio',$portfolio);
    }
    public function delete($id){
    	$delete = Portfolio::find($id);
    	$delete->delete();
    	return redirect()->back();
    }
    public function dashboard(){
    	return view('dashboard.dashboard');
    }
    public function upload(){
    	return view('dashboard.upload');
    }
    public function uploaded(Request $request){
    	$request->validate([
        'name'=>'required|max:255',
        'image'=>'required|mimes:jpg,gif,jpeg'
    	]);
    	$portfolio = new Portfolio;
    	$portfolio->name = $request->name;
    	$imagename = $request->image;
    	$name = $imagename->getClientOriginalName();
    	$newname = time().$name;
    	$imagename->move('uploads/events',$newname);
    	$url = 'uploads/events/'.$newname;
    	$portfolio->image = $url;
    	$create = $portfolio->save();
    	if($create){
    		Session::flash('success','Successfully Uploaded');
    	}else{
    		Session::flash('error','Unsuccessful');
    	}
    	return redirect()->back();
    }
}
