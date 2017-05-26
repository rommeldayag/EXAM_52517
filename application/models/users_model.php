<?php

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database("db_ci");

}

public function get_all_users()

{

$query = $this->db->get('users');

return $query->result();

}

//Load Inserting Users method
public function insert_users_to_db($data)

{

return $this->db->insert('users', $data);

}
//END


//getID
public function getById($id){
$query = $this->db->get_where('users',array('id'=>$id));
return $query->row_array();
}
//end






// call update
public function update_info($data,$id)

{

$this->db->where('users.id',$id);

return $this->db->update('users', $data);

}
//end



//call delete
public function delete_a_user($id)

{

$this->db->where('users.id',$id);

return $this->db->delete('users');

}
//end



public function cart($data,$id,$totalstocks)
  {
    
    $updatequery = "UPDATE users SET stocks = $totalstocks WHERE id = ?";
    return $this->db->query($updatequery,array($totalstock, $id));

  }




}
?>
