<?php

class Home extends Dojo_controller
{
  public function index()
  {
    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->view('Home/index', $data);
  }
}