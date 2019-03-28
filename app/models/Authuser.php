<?php

session_start();

class Authuser extends Dojo_model
{
  public function Reglog()
  {
    if (isset($_POST['register']))
    {
      // generate input user, membersihkan dari karakter terlarang dan mencegah sql injection, tapi ga 100%
      $nama  = rtrim(htmlspecialchars(strtolower(($_POST['nama']))));
      $prodi = rtrim(htmlspecialchars(strtolower(($_POST['prodi']))));

      $query = $this->db->get_where('user', ['nama' => $nama, 'prodi' => $prodi]);
      if (count($query) > 0)
      {
        $_SESSION['errortype'] = "success";
        $_SESSION['msg'] = "Nama berhasil terdaftar";
        $_SESSION['nim'] = $query[0]['nim'];
        $_SESSION['password'] = $query[0]['password'];
      }
      else 
      {
        // gagal daftar
        $_SESSION['errortype'] = "danger";
        $_SESSION['msg'] = "Nama gagal terdaftar";
      }
      session_destroy();
    }

    if (isset($_POST['login']))
    {
      $nim  = rtrim(htmlspecialchars(strtolower(($_POST['nim']))));
      $password = rtrim(htmlspecialchars(strtolower(($_POST['password']))));

      $query = $this->db->self_query("SELECT * FROM user WHERE nim = '$nim'");
      if (count($query) > 0)
      {        
        $_SESSION['nim'] = $query[0]['nim'];  
        $_SESSION['nama'] = $query[0]['nama'];
        echo "<script>document.location.href='Kuisioner'</script>";
      }
      else 
      {
        $_SESSION['errortype'] = "danger";
        // pesan ketika login gagal
        $_SESSION['msg'] = "Login gagal";
        session_destroy();
      }
    }
  }

}