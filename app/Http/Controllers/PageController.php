<?php
namespace App\Http\Controllers;
class PageController extends Controller
{	 
public function index(){		
 return "Halaman Home";	 
}	 
public function tampil(){		
  
  $nama1 = 'Habel Steven Yani';
  $nilai1 = "A";
  $nama2 = 'Joko Hardono';
  $nilai2 = "B";

  return  view ('mahasiswa', compact('nama1','nilai1'), compact('nama2','nilai2'));
}




}
