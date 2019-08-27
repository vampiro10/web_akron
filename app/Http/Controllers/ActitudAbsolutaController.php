<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActitudAbsolutaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('actitud');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    /**
     * Display the Actitid Absoluta Detail Page
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_erick_ruiz() {
        return view('actitud.erick_ruiz');
    }
    
    /**
     * Display the Actitid Absoluta Detail Page
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_rogelio_lopez() {
        return view('actitud.rogelio_lopez');
    }
    
    /**
     * Display the Actitid Absoluta Detail Page
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_carlos_ortiz() {
        return view('actitud.carlos_ortiz');
    }
    
    /**
     * Display the Actitid Absoluta Detail Page
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_jaime_munguia() {
        return view('actitud.jaime_munguia');
    }

}
