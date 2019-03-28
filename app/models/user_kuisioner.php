<?php

class user_kuisioner extends Dojo_model
{
  public function regist_kuisioner()
  {

    if (isset($_POST['submit']))
    {
      $data = [
        'nim' => rtrim(htmlspecialchars(strtolower($_POST['nim']))),
        'tanggal_lulus' => rtrim(htmlspecialchars(strtolower($_POST['tanggal_lulus']))),
        'tanggal_masuk' => rtrim(htmlspecialchars(strtolower($_POST['tanggal_masuk']))),
        'nama' => rtrim(htmlspecialchars(strtolower($_POST['nama']))),
        'prodi' => rtrim(htmlspecialchars(strtolower($_POST['prodi']))),
        'kelamin' => rtrim(htmlspecialchars(strtolower($_POST['kelamin']))),
        'tanggal_lahir' => rtrim(htmlspecialchars(strtolower($_POST['tanggal_lahir']))),
        'email' => rtrim(htmlspecialchars(strtolower($_POST['email']))),
        'telepon' => rtrim(htmlspecialchars(strtolower($_POST['telepon']))),
        'facebook' => rtrim(htmlspecialchars(strtolower($_POST['facebook']))),
        'twitter' => rtrim(htmlspecialchars(strtolower($_POST['twitter'] ))),
        'linkedin' => rtrim(htmlspecialchars(strtolower($_POST['linkedin'])))
      ];

      $query = $this->db->insert_data('user_complete_data', $data);
      echo $query;
      if ($query > 0)
      {
        $_SESSION['form_checked'] = true;
        echo "<script>alert('terimakasih sudah mengisi data kuisioner');
              document.location.href= 'questions';
              </script>";
      }

      else
      {
        // pesan error ketika data gagal dimasukan ke db
        $_POST['error'] = "Data anda gagal dimasukan ke databaase";
        unset($_POST['error']);
      }

    }
    
  }
}