<?php

class Dccpermodel extends CI_Model {

public $table="task";

public function __construct() {
  $this->load->database(); 

}

public function getMembers(){
	$query=$this->db->query('SELECT * FROM members');
	return $query->result();
}


public function getDetails($id){
	$query=$this->db->get_where('members', array('member_id' => $id));
	return $query->result();
}

/*
public function getTasks($id){
	$query=$this->db->get_where('task',array('member_id' => $id));
	return $query->result();
}
*/

function getTasks($id,$config,$segment)
    {
        $query=$this->db->get_where('task',array('member_id' => $id),$config,$segment);
        return $query->result();
    }



//Returns total number of tasks
public function count($id){
    $query=$this->db->get_where('task',array('member_id' => $id));
	return $query->num_rows();	
}

}

?>