<?php

class birthday_Model extends CI_Model {

public function __construct()	{
  $this->load->database(); 

}


public function insertData(){
	$name=$this->input->post('name');
$phone=$this->input->post('phone');
$email=$this->input->post('email');
$address=$this->input->post('address');

$password=$this->input->post('password');

$data = array(
'name'=>$name,
'phone'=>$phone,
'email'=>$email,
'address'=>$address,
'password'=>$password

);

$this->db->insert('customer',$data);
	
	
}
public function getcakes(){
	$this->db->select('*');
        $this->db->from('cakes');
          $query = $this->db->get();
          return $query->result();

}

public function getContent($name){
	$this->db->select('*');
        $this->db->from($name);
          $query = $this->db->get();
          return $query->result();

}

public function getcake($cakeid){
		  $query = $this->db->get_where('cakes', array('cake_id' => $cakeid));


}



public function checklogin($data){
	$this->db->select('*');
        $this->db->from('customer');
        $this->db->where('name', $data['name']);
         $this->db->where('password', $data['password']);
           $query = $this->db->get();
		   return $query;


}

public function addToCart($table,$data2,$cust,$data){
	
$this->db->select('*');
        $this->db->from('cart');
        $this->db->where('cust_id', $cust);
		$query = $this->db->get();
		
if($query->num_rows()==0)
	
	{
      $this->db->insert('cart',$data2);
	}
	if($query->num_rows()==1){

$this->db->where('cust_id',$cust);
$this->db->update('cart',$data2);
	}
	
	$this->cart->insert($data);
}




public function addContents($table,$data){
	
	 return $this->db->insert($table,$data);
}

}
?>