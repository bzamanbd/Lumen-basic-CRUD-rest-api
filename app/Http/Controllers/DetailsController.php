<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller{

  function selectDetails(Request $req){
   $sql = 'SELECT * FROM details';
   $req = DB::select($sql);
   return $req;
  }

  function createDetails(Request $req){
   $name = $req->input('name');
   $class = $req->input('class');
   $roll = $req->input('roll');
   $phone = $req->input('phone');
   $city = $req->input('city');

   $sql = "INSERT INTO `details`(`name`, `class`, `roll`, `phone`, `city`) VALUES (?,?,?,?,?)";
   $result =  DB::insert($sql,[$name,$class,$roll,$phone,$city]);
   if ($result==true) {
    return 'data inserted successfully';
   } else {
    return 'error found, try again';
   }


  }

  function editeDetails(Request $req){
   $roll = $req->input('roll');
   $phone = $req->input('phone');
   $city = $req->input('city');
   $sql = "UPDATE `details` SET `phone`=?,`city`=? WHERE `roll`=?";
   $result = DB::update($sql,[$phone,$city,$roll]);
   if ($result==true) {
    return'one data is updated';
   } else {
    return'error found';
   }

  }


  function deleteDetails(Request $req){
   $id = $req->input("id");
   // return $id;
   $sql = "DELETE FROM `details` WHERE ID =?";

   $result = DB::delete($sql,[$id]);

   if ($result == true) {
    return'One data deleted';
   } else {
    return 'error found,try again';
   }

  }



}