<?php

class Questions extends Dojo_controller
{
  public function index()
  {
    session_start();
    // memeriksa apakah user sudah benar benar login, kalo blom redirect kembali kehalaman login
    if(!isset($_SESSION['nim']))
    {
      echo "<script>document.location.href='Auth';</script>";
    }

    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->model('generate_questions')->execute_input();
    $this->view('Questions/index', $data);
  }
}