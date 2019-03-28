<?php

class generate_questions extends Dojo_model
{
  public function execute_input()
  {
    $nim = $_SESSION['nim'];
    $nama = $_SESSION['nama'];

    if (isset($_POST['submit']))
    {
      $result = $this->query_db();
      if (count($result) > 0)
      {
        $data = [
          'nim' => $nim,
          'nama' => $nama
        ];
        $query_exec = $this->db>insert_data('jawaban_user', $data);

        if($query_exec > 0 )
        {
          $rows = [
            'status_setelah_lulus' => $_POST['status']
          ];
          $this->db->update_data('jawaban_user', $rows, [['nim' => $nim]]);
        }
      }
      else 
      {

      }
    }
  }

  public function query_db()
  {
    $nim = $_SESSION['nim'];
    $nama = $_SESSION['nama'];
    $specific_data = [ 
      'nim' => $nim,
      'nama' => $nama
    ];
    $this->db->where($specific_data);
    return $this->db->get_data('jawaban_user');
  }

}