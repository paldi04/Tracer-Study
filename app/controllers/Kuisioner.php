<?php

class Kuisioner extends Dojo_controller
{
  public function index()
  {
    session_start();
    // memeriksa apakah user sudah benar benar login, kalo blom redirect kembali kehalaman login
    if(!isset($_SESSION['nim']))
    {
      echo "<script>document.location.href='Auth'</script>";
    }
    else
    {
      $data['nim'] = $_SESSION['nim'];
      $data['nama'] = $_SESSION['nama'];
      $data['page'] = 'Tracer Study Telkom Univeristy';
      $this->model('user_kuisioner')->regist_kuisioner();
      $this->view('data_kuisioner/index', $data);
    }
  }
}