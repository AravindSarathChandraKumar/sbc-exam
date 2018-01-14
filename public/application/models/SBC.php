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
  public function fetchQuestions(){
    $this->db->select('*');
    $this->db->from('questions');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function removeQstn($value){

    $SQL= 'SELECT QstnId from  questions where (Id = '.$value.');';
    $query = $this->db->query($SQL);
    foreach ($query->result() as $row)
    {
        $this->load->dbforge();
        $fetched = $row->QstnId;
        $this->dbforge->drop_table($fetched);

    }
  $this->db->where('Id', $value);
  $this->db->delete('questions');
  return true;

  }
  public function createQstn($datas){
    $data['Title']=$datas['Title'];
    $data['noQstn']=$datas['noQstn'];
    $data['Semester']=$datas['semester'];
    $data['Author']=$datas['Author'];
    $data['QstnId']=$datas['QstnIds'];
    $this->db->insert('questions',$data);

    $this->db->query('use SBC');

    // define table fields
    $fields = array(
      'Id' => array(
        'type' => 'INT',
        'constraint' => 9,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'Question' => array(
        'type' => 'VARCHAR',
        'constraint' => 100
      ),
      'Option1' => array(
        'type' => 'VARCHAR',
        'constraint' => 30
      ),
      'Option2' => array(
        'type' => 'VARCHAR',
        'constraint' => 30
      ),
      'Option3' => array(
        'type' => 'VARCHAR',
        'constraint' => 30
      ),
      'Option4' => array(
        'type' => 'VARCHAR',
        'constraint' => 30
      ),
      'answer' => array(
        'type' => 'VARCHAR',
        'constraint' => 60,

      )
     );
     $this->load->dbforge();
    $this->dbforge->add_field($fields);

    // define primary key
    $this->dbforge->add_key('Id', TRUE);

    // create table
    $this->dbforge->create_table($data['QstnId'],TRUE);
    return true;

  }
  public function listUsers($data){

    $condition="reg_id LIKE" . "'" . $data['sem'] . "%" . "' ";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();

    return $query->result_array();
  }
  public function login($data){
    $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    $back=$query->result_array();
    if ($query->num_rows() == 1) {
      if($back!=NULL)
      {return $back;}


    } else {
      return false;
    }
    }
    public function fetchProfile($user){
      $condition ="username ="."'".$user['username'] ."'";
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where($condition);
      $query=$this->db->get();
      return $query->result_array();
    }
    public function loadQstn($data){
     $this->db->select('*');
     $this->db->from($data['QstnId']);
     $query =$this->db->get();
     return $query->result_array();
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
