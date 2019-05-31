<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Products;

class Product1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return "it works".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "the id is".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function Home($name, $id, $sex){
        //return view('ProductsPages/Home')->with('name',$name);
        return view('ProductsPages/Home', compact('name','id','sex'));
    }
    public function contact(){
        $people=["Sham","Clinton","Albert"];
        return view('ProductsPages/Contact', compact('people'));
    }
    public function readData(){
        $product = Products::all();
        foreach($product as $pro){
            $na=$pro->second_name;
            $fname=$pro->first_name;
            return view('ProductsPages/about', compact('na','fname'));
        }

    }
    
    public function basicInsert(){
        $product = new Products;
        $product->email="namawejje@gmail.com";
        $product->first_name="Aisha";
        $product->second_name="Namawejje";
        $product->sex="female";
        $product->token="567";
    }
    public function getspecifc(){
        $product = Products::find();
        foreach($product as $pro){
            $na1=$pro->second_name;
            $fname1=$pro->first_name;
            return view('clients', compact('na1`','fname1'));
        }

    }

    
}
