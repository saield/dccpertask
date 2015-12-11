<?php

class birthday_Model extends CI_Model {

public function __construct()	{
  $this->load->database(); 

}

public function checkAvailability($data){
	//echo $data['username'];
	
	  $query = $this->db->get_where('login', array('username' => $data['name'], 'password'=>md5($data['password'])));
		 return $query;
	 // return $query
		}


public function insertData($data1,$data){
	
	
$query=$this->db->insert('customer',$data1);

$last_id=$this->db->insert_id();
$data2=array(
	'cust_id'=>$last_id,
'username'=>$data['name'],
'password'=>md5($data['password'])

);
$this->db->insert('login',$data2);

}	

public function getcakes(){
	$this->db->select('*');
        $this->db->from('cakes');
          $query = $this->db->get();
          return $query->result();

}

public function getContent($name){

	if($name=="package"){
		$this->db->select('package_id,user_id,username');
$this->db->distinct();
$query = $this->db->get('package');
	}
	else{
	$this->db->select('*');
        $this->db->from($name);
          $query = $this->db->get();
      }
          return $query->result();

}

public function getcake($cakeid){
		  $query = $this->db->get_where('cakes', array('cake_id' => $cakeid));


}
public function getcustomer($cid){
		  $query = $this->db->get_where('customer', array('customer_id' => $cid));
          return $query->result();


}


public function checklogin($data){
	$this->db->select('*');
        $this->db->from('login');
        $this->db->where('username', $data['name']);
         $this->db->where('password', md5($data['password']));
           $query = $this->db->get();
		   return $query;


}

public function addToCart($data){
	

	
	$this->cart->insert($data);
}




public function addContents($table,$data){
	
	 return $this->db->insert($table,$data);
}


public function getpackage($id){

$this->db->select('*');
        $this->db->from('package');
        $this->db->where('package_id', $id);
		$query = $this->db->get();
		return $query->result();

}


public function gettotal($pid){


	$query = $this->db->select_sum('price');
	$query=$this->db->where('package_id',$pid);
    $query = $this->db->get('package');
    return $query->result();
}


/////////////////////// cart //////////////////
public function store_user_cart_contents($usr,$table)
{
	if(isset($_SESSION['usrid'])){
	//$userid=$_SESSION['usrid'];
$this->db->where('user_id', $usr);
$q1=$this->db->delete('table_cart_data'); 

}
	else{

		$userid=$usr;
	}
//$userid = $this->session->userdata('usrid');
//Deletes the old cart contents of the particular user to avoid duplication of user's cart contents


//Taking the slice of the cart_contents containing the cart items only. We do not need to store the ‘cart total’ or the ‘total items’.
//$contents = $this->session->userdata('cart_contents');
	$last=$this->db->count_all('package');
$last=$last+1;
$contents=$this->cart->contents();
foreach($contents as $items)
{
//Insert new cart contents of user into database table
	if($table=="table_cart_data"){
	$data=array(
'user_id'=>$usr,
'product_id'=>$items['id'],
'name'=>$items['name'],
'price'=>$items['price'],
'qty'=>$items['qty'],
'image'=>$items['image']

	);
		$this->db->insert($table,$data);

}
	else{
		$data1=$this->birthday_model->getcustomer($usr);

	//$last+=1;
foreach($data1 as $row){


 $name=$row->name;

//needto destroycart ...delete table_cart_data entry

}
 
		$data=array(
'package_id'=>$last,
'user_id'=>$usr,
'username'=>$name,
'product_id'=>$items['id'],
'name'=>$items['name'],
'price'=>$items['price'],
);
		$this->db->insert($table,$data);


}
}
}




/////////////////////////////delete update for all////////	
	public function deleteData($data,$table,$table_id){
	$this->db->where($table_id, $data['id']);
	$this->db->delete($table);
}

public function get_service_contents($datasend,$table,$table_id) {
				$this->db->select('*');
                $this->db->from($table);
				$this->db->where($table_id, $datasend['id']);
                $query = $this->db->get();
                return $query->result();
				break;
				
            }
			
		public function update_service($id,$data,$table,$table_id){
			$this->db->where($table_id, $id);
			$this->db->update($table, $data);
			}

//////////////update-delete venue//////
public function deleteVenue($data){
	$this->db->where('venue_id', $data['id']);
		$this->db->delete('venue');
		}

public function getvenues(){
	$this->db->select('*');
        $this->db->from('venue');
          $query = $this->db->get();
          return $query->result();

}
public function get_venue_contents($datasend) {
                
				$this->db->select('*');
                $this->db->from('venue');
				$this->db->where('venue_id', $datasend['id']);
                $query = $this->db->get();
                return $query->result();
				break;
				
            }
			
	public function update_venue($id,$data){
	$this->db->where('venue_id', $id);
	$this->db->update('venue', $data);
	
	}


	public function deleteCake($data){
	$this->db->where('cake_id', $data['id']);
		$this->db->delete('cakes');
		}
		
	public function get_cake_contents($datasend) {
			
			$this->db->select('*');
			$this->db->from('cakes');
			$this->db->where('cake_id', $datasend['id']);
			$query = $this->db->get();
			return $query->result();
			break;
			
		}
	public function update_cake($id,$data){
	$this->db->where('cake_id', $id);
	$this->db->update('cakes', $data);
	
	}
}
?>