<?php

class Items_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database("test");

}

public function get_all_users()

{

$query = $this->db->get('items');

return $query->result();

}

//Load Inserting Users method
public function insert_item_to_db($data)

{

return $this->db->insert('items', $data);

}
//END


//getID
public function getById($id){
$query = $this->db->get_where('items',array('id'=>$id));
return $query->row_array();
}
//end






// call update
public function update_info($data,$id)

{

$this->db->where('items.id',$id);

return $this->db->update('items', $data);

}
//end



//call delete
public function delete_a_user($id)

{

$this->db->where('items.id',$id);

return $this->db->delete('items');

}
//end







}
?>
