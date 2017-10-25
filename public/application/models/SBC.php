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
}
