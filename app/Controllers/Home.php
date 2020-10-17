<?php namespace App\Controllers;
class Home extends BaseController
{
public function index()
{
return
view('welcome_message');
}
//------------------------------------------
public function show()
{
$data['nama']='eggiamandara';
$data['jurusan']='ilmu komputer';
echo view('mahasiswa/header',$data);
echo view('mahasiswa/index',$data);
echo view('mahasiwa/footer',$data);
}
}
