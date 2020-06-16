<?php

namespace App\Http\Controllers;
use App\Phone;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PhoneController extends Controller
{
    //how data cho adminj
    function index(){
        $phones=Phone::all();
        return view('phones.dashboard',['phones'=> $phones]);
    }
    // show data cho trang nguoi dung
    function home(){
        $phones=Phone::all();
        return view('home',['phones'=> $phones]);
    }

    function create(){
        return view('phones.create');
    }

    function store( Request $request){
        // $request->validate([
        //     'name' =>      'required|unique:books|max:255',
        //     'style'=>      'required|unique:books|max:255',
        //     'price'=>       'required',

        // ]);

    $phones= new Phone;
    $phones->name=$request->name;
    $phones->style=$request->style;
    $phones->price=$request->price;
    $phones->save();
    return redirect('phones/dashboard');
    }

//
    function edit($id){
        $phone = Phone::find($id);

        return view('phones.edit',['phones'=>$phone]);
    }
    //update san pham
    function update($id, Request $request){


    $phones=Phone::find($id);
    $phones->id=$id;
    $phones->name=$request->name;
    $phones->style=$request->style;
    $phones->price=$request->price;
    $phones->save();
    return redirect('/phones/dashboard');
    }

    //xoa san pham
    function destroy($id){
        $phone= Phone::find($id);
        $phone->delete();
        return redirect('/phones/dashboard');
    }

}
