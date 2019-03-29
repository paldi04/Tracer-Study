<?php

session_start();
class Questions extends Dojo_controller
{
  public function index()
  {
    // memeriksa apakah user sudah benar benar login, kalo blom redirect kembali kehalaman login
    if(!isset($_SESSION['nim']))
    {
      echo "<script>document.location.href='Auth';</script>";
    }

    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->model('generate_questions')->execute_input();
    $this->view('Questions/index', $data);
  }


  public function one()
  {
    if(!isset($_SESSION['nim']) || !isset($_SESSION['next_quest']))
    {
      echo "<script>document.location.href='Questions';</script>";
    }
    $data_user = $_SESSION['data_user'];
    if ($data_user['status_setelah_lulus'] == "bekerja");
    {
      $data['checkstats'] = "bekerja";
    }
    if($data_user['status_setelah_lulus'] == "tidak bekerja")
    {
      $data['checkstats'] = "tidak bekerja";
    }
    if($data_user['status_setelah_lulus'] == "study lanjut") 
    {
      $data['checkstats'] = "study lanjut";
    }

    if(isset($_POST['submit']))
    {
      $data_user['sub_jawaban'] = $_POST['sub-quest'];
      $query = $this->db->insert_data('jawaban_user', $data_user);
      if ($query > 0)
      {
        $_SESSION['message'] = "terimakasih sudah menjawab!";
      }
    }

    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->view('Questions/one', $data);
  }
  public function two()
  {
    if(!isset($_SESSION['nim']) || !isset($_SESSION['next_quest']))
    {
      echo "<script>document.location.href='Questions';</script>";
    }
    $data_user = $_SESSION['data_user'];

    if ($data_user['status_setelah_lulus'] == "bekerja");
    {
      $data['checkstats'] = "bekerja";
    }
    
    // if(isset($_POST['submit']))
    // {
    //   $data_user['sub_jawaban'] = $_POST['sub-quest'];
    //   $query = $this->db->insert_data('jawaban_user', $data_user);
    //   if ($query > 0)
    //   {
    //     $_SESSION['message'] = "terimakasih sudah menjawab!";
    //     echo "<script>document.location.href='Questions/two'</script>"
    //   }
    // }

    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->view('Questions/one', $data);
  }

  
}