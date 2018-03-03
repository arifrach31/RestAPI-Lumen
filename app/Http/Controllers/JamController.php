<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamController extends Controller {

  public function __construct(){

  }
  public function index(){
    return DB::table('jamsholat')->get();
  }
  public function store(Request $request){
    $namasholat = $request->namasholat;
    $waktusholat = $request->waktusholat;
    DB::table('jamsholat')->insert([
      "namasholat"=>$namasholat,
      "waktusholat"=>$waktusholat
    ]);
    return $namasholat. ' '.$waktusholat.' berhasil ditambahkan';
  }
  public function update(Request $request, $id){
    DB:: table('jamsholat')->where('id', $id)->update([
      "namasholat"=>$request->namasholat,
      "waktusholat"=>$request->waktusholat
    ]);
    return 'ID '.$id.' berhasil diperbaharui';
  }
  public function view($id){
    return json_encode(DB::table('jamsholat')->where('id', $id)->first());
  }
  public function delete($id){
    DB:: table('jamsholat')->where('id', $id)->delete();
    return 'ID '.$id.' Sukses Terdelete';
  }
}
