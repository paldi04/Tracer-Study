<?php

class Auth extends Dojo_controller
{
  public function index()
  {
    $data['page'] = 'Tracer Study Telkom Univeristy';
    // reglog, register dan login
    $this->model('Authuser')->Reglog();
    $this->view('Auth/index', $data);
  }
}