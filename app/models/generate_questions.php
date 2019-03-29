<?php


class generate_questions extends Dojo_model
{
  protected $nim,
            $nama,
            $status,
            $sub_jawaban;
  public function __construct()
  {
    unset($_SESSION['success']);
    parent::__construct();
    $this->nim = $_SESSION['nim'];
    $this->nama = $_SESSION['nama'];
    $this->prodi = $_SESSION['prodi'];
    
  }
  public function execute_input()
  {
    if (isset($_POST['next']))
    {
      $query = $this->db->get_where('jawaban_user', ['nim' => $this->nim]);
      if(count($query) > 0)
      {
        // ketika jawaban user sudah ada di db, namun user tsb mencoba ngisi form lagi
        $_SESSION['error'] = "Anda sudah pernah mengisi ini sebelumnya";
      }
      else 
      {
        $_SESSION['next_quest'] = true;
        $this->status = $_POST['status'];
            $_SESSION['data_user'] = [
              'nim' => $this->nim,
              'nama' => $this->nama,
              'prodi' => $this->prodi,
              'status_setelah_lulus' => $this->status
            ];
        echo "<script>document.location.href='Questions/one'</script>";
        exit;
      }
    }
  }
}