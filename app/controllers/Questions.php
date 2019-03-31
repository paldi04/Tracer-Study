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
        echo "<script>alert('terimakasih sudah bersedia menjawab!');</script>";
        $_SESSION['message'] = true;
      }
    }

    if(isset($_POST['next_quest']))
    {
      $data_user['sub_jawaban'] = $_POST['sub-quest'];
      $query = $this->db->insert_data('jawaban_user', $data_user);
      if ($query > 0)
      {
        $_SESSION['data_user'] = $data_user;
        echo "<script>document.location.href='two'</script>";
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

    if ($data_user['sub_jawaban'] == "bekerja(diperusahaan)")
    {
      $data['checkstats'] = "bekerja(diperusahaan)";
    }
    if ($data_user['sub_jawaban'] == "wiraswasta")
    {
      $data['checkstats'] = "wiraswasta";
    }

    if (isset($_POST['here']))
    {
      if ($data['checkstats'] = "bekerja(diperusahaan)")
      {
        $upt_data = [
          'sub_jawaban' => "bekerja diperusahaan sejak : " . $_POST['sub-quest-date']
        ];

      }
      else 
      {
        //sub jawaban akan dmasukan ke db(update ulang)
        $upt_data = [
          'sub_jawaban' => $_POST['sub-quest-date'] . " sudah membangun usaha"
        ];
      }
      $this->db->update_data('jawaban_user', $upt_data, ['nim' => $data_user['nim']]);
      echo "<script>alert('terimakasih sudah bersedia menjawab!');</script>";
      $_SESSION['message'] = true;
    }
    $data['page'] = 'Tracer Study Telkom Univeristy';
    $this->view('Questions/two', $data);
  }

  
}