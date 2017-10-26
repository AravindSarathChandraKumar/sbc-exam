    <?php
class SBC extends CI_Model{
	public function __construct	(){
		$this->load->database();

	}
  public function remove_user($data){
    $condition = "reg_id =" . "'" . $data['regnum'] . "' AND " . "email =" . "'" . $data['email'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      $value=$data['regnum'];
      $this->db->where('reg_id', $value);
      $this->db->delete('users');
      return true;
    } else {
      return false;
    }

  }
  public function login($data){
    $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
    return true;
    } else {
    return false;
    }
    }
    public function verifyUser($data){
        $condition = "hash =" . "'" . $data['hash'] . "'";
        $this->db->select('*');
        $this->db->from('tempuser');
        $this->db->where($condition);
        $query = $this->db->get();
        foreach ($query->result() as $row){
          $datas['username'] = $row->username;
          $datas['password'] = $row->password;
          $datas['email'] = $row->email;
          $datas['reg_id'] = $row->reg_id;
          $datas['fname'] = $row->fname;

        }
        if ($query->num_rows() == 1) {
          $this->db->insert('users',$datas);
          $condition = "hash =" . "'" . $data['hash'] . "'";
          $this->db->where($condition);
          $this->db->delete('tempuser');
          return true;
        } else {
          return false;
        }
    }
}
