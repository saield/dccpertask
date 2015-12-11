
<?php
class birthday_controller extends CI_Controller {
	  function __construct()
        {
            parent::__construct();            
            $this->load->model('birthday_model');
				$this->load->helper(array('form', 'url'));
				
				 

        }
	
public function tabs($table) {
		      $this->load->view($table);

}

public function cakes() {
	
	     $data['results']=$this->birthday_model->getcakes();

      $this->load->view('cakes',$data);
		 

}


public function services($table) {
	     $data['results']=$this->birthday_model->getContent($table);

      $this->load->view($table,$data);
		 

}
public function insert(){
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
     $row=$this->birthday_model->checkAvailability($data);
     $count=$row->num_rows();
	if($count>=1){
echo"<script>alert('password is not available.Choose  a different one');</script>";
$this->load->view('signup');


	}
	else{
		$data1 = array(
'name'=>$name,
'phone'=>$phone,
'email'=>$email,
'address'=>$address
);
		     $row=$this->birthday_model->insertData($data1,$data);


redirect('birthday_controller/tabs/login');


	}


}

public function check_login(){
	$name=$this->input->post('name');
$password=$this->input->post('password');
$data = array(
'name'=>$name,
'password'=>$password
);
     $row=$this->birthday_model->checklogin($data);
	if($row->num_rows()>0)
	
	{
		foreach ($row->result() as $getid) 
		{
		
			if(($getid->username=="Admin") && ($getid->password==md5("birthday")) ){

			$_SESSION['loginid']=$getid->cust_id;
                $this->load->view('admincakesadd');


			}
			else{
			$_SESSION['name']=$getid->username;
			$_SESSION['usrid']=$getid->cust_id;
		}
			//$this->session->set_userdata('userid',$getid->customer_id);
			$usrid=$getid->cust_id;
		}
		if(isset($_SESSION['usrid'])){
      $this->load->view('newServices');

         return $this->get_user_cart_contents($getid->cust_id);
     }

	}
	else
	{
	   echo "invalid user";
redirect('birthday_controller/tabs/login');

	}
}

function get_user_cart_contents($usrid)

{
//Loads the cart items which were stored by the particular user in database table
	//echo "<script>alert('enter');</script>";
$this->db->select('*');
        $this->db->from('table_cart_data');
        $this->db->where('user_id', $usrid);
		$query = $this->db->get();
$res = $query->result();
if(!empty($res)){
foreach($res as $val)
{

//Inserts the newly fetched cart data for the particular user into this session as per cart class format
$data = array('id'=> $val->product_id, 'qty'=>$val->qty, 'price'=> $val->price, 'name'=> $val->name, 'image'=> $val->image);
$this->cart->product_name_rules = '[:print:]';
$this->cart->insert($data);
}
//$cart_data = $this->session->userdata('cart_contents');
//echo $cart_data;
}
}

function destroy(){
	
	
$this->cart->destroy();

	
}

function remove($rowid){
	
	
$this->cart->update(array(
'rowid'=>$rowid,
'qty'=>0

	));

	redirect('birthday_controller/tabs/cart');
}


function logout_action()

{	
if(isset($_SESSION['usrid'])){
 $this->store_user_cart_contents($_SESSION['usrid'],'table_cart_data');

}
//store cart contents from a user session into the database table
//$this->session->unset_userdata('usrid');              //usrid is checked at each page to see if user is logged in, so on logout, unset usrid
//$this->session->unset_userdata('session_id');
  session_unset();


return $this->tabs('login');
}

function store_user_cart_contents($usr,$table)
{
	$this->birthday_model->store_user_cart_contents($usr,$table);
}


public function CakeAdd(){
		      $this->load->view('addCakes');

}
public function VenueAdd(){
		      $this->load->view('addvenue');

}

public function addToCart($table){
if(isset($_SESSION['usrid'])){
	$cust=$_SESSION['usrid'];

$cakeid=$this->input->post('id');

$img=$this->input->post('image');

$data = array(
'id'=>$this->input->post('id'),
'name'=>$this->input->post('name'),
'qty'=>'1',
'price'=>$this->input->post('price'),
'image'=>$img,
);


     $this->birthday_model->addToCart($data);
redirect('birthday_controller/tabs/cart');
	}
	else{

		echo '<script>alert("Login to add")</script>';
redirect('birthday_controller/tabs/login');
	} 
}


public function addvenue(){
		      $this->load->view('adminvenueadd');

}
 public function getvenuedetails(){
	 list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
          $imagepath="uploads/venue/".$filename.time().".".$extension;
           move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
	 $name=$this->input->post('name');
			$description=$this->input->post('description');
			$price=$this->input->post('price');
			$address=$this->input->post('address');
			$capacity=$this->input->post('capacity');
			
			//store retrieved data in an array
			$data=array(
				'name'=>$name,
				'description'=>$description,
				'price'=>$price,
				'address'=>$address,
				'capacity'=>$capacity,
				'image'=>$imagepath
			);
						
			//insert data into the database table
			$querry=$this->birthday_model->addContents('venue',$data);
			
			if ($querry)
				echo '<script> alert("Updated"); </script>';
			//after inserting data open the same addvenue page
			//redirect('birthday_controller/adminvenueadd');
			
 }
 
 
 function addVideography($table,$viewNext){
	list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
						$imagepath='uploads/'.$table.'/'.$filename.time().'.'.$extension;
					move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
						$data = array(
							'name'=>$this->input->post('name'),
							'description'=>$this->input->post('description'),
						'price'=>$this->input->post('price'),
							'image'=>$imagepath
						);
						$query=$this->birthday_model->addContents($table,$data); 
												if ($query)
				echo '<script> alert("Updated"); </script>';
			//after inserting data open the same addvenue page
		redirect('birthday_controller/videoAdd');

	 
 }
 
 
 public function addorder(){


	$userid=$_SESSION['usrid'];
	$data=$this->birthday_model->getcustomer($userid);

//$this->birthday_model->addContents('package',$data);
$this->db->where('user_id', $userid);
$q1=$this->db->delete('table_cart_data'); 
		 $this->store_user_cart_contents($userid,'package');



//$this->birthday_model->addOrder();
	$this->cart->destroy();
	echo "<script>alert('order has been added');</script>";


 }
 public function displayOrders(){

 $data1['results']=$this->birthday_model->getContent('package');

$this->load->view('admincartid',$data1);
 


 



}


public function gettotal($pid){

 $data['results']=$this->birthday_model->gettotal($pid);





}

public function displaycart($pid){


 $data['results']=$this->birthday_model->getpackage($pid);
  $data1=$this->birthday_model->getpackage($pid);

foreach($data1 as $row){

	$usrid=$row->user_id;
}
//$this->store_user_cart_contents($usrid,'package');
 $data2['results']=$this->birthday_model->gettotal($pid);

$data['total']=$data2['results'][0]->price;
$this->get_user_cart_contents($pid,'package');
$this->load->view('admincart',$data);

}

////////////////////////update delete for alll//////////////
	
	
public function service_forupdate($table,$table_id){
  //$this->load->model('birthday_model');
	//session_start();
	     $data['results']=$this->birthday_model->getContent($table);
		 $data['id'] = $table_id;
		 $data['table'] = $table;
		 $data['table_id'] = $table_id;
	$this->load->view('service_update-delete',$data);
		}
		
	public function update_service(){
				$table = $this->input->post('table');
				$table_id = $this->input->post('table_id');
			if($this->input->post('submit') == "delete" ){
				$id=$this->input->post('id');
			
				$data = array(
				'id'=>$id
				);
				$this->birthday_model->deleteData($data,$table,$table_id);
				$this->service_forupdate($table,$table_id);
				}
			else {
				$this->display_service_data($table,$table_id);
			}
	}
	
	public function display_service_data($table,$table_id){
			$id=$this->input->post('id');
			$datasend = array (
								'id'=>$id,
								);
			
			$data = array();
            
			$data[ 'result' ] = $this->birthday_model->get_service_contents($datasend,$table,$table_id);
			$data['id'] = $id;
			$data['table'] = $table;
			$data['table_id'] = $table_id;
            
			//echo $data[ $result[ 'name' ] ];	
		   $this->load->view('update_service', $data); 
	}

		public function update_service_forall(){
			if(isset($_POST['fileUpload'])){
			list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
					$imagepath="uploads/venue/".$filename.time().".".$extension;
					move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
		
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$price=$this->input->post('price');
		$table = $this->input->post('table');
		$table_id = $this->input->post('table_id');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'price' =>$price,
					   'image' =>$imagepath
					   
		);
		}
		else{
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$price=$this->input->post('price');
		$table = $this->input->post('table');
		$table_id = $this->input->post('table_id');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'price' =>$price
					   );
		}
		$this->birthday_model->update_service($id,$data,$table,$table_id);
		$this->service_forupdate($table,$table_id);
		//$this->load->view('getID');
		}
	function display_table($table,$table_id){
		if($table=="cakes")
			$table_id="cake_id";
		$data = array(
			'table'=>$table,
			'table_id'=>$table_id
		);

		$this->load->view('adminserviceadd',$data);
	
	}
////////////////////////////////update-delete venue///

public function venue_forupdate(){
  //$this->load->model('birthday_model');
	//session_start();
	     $data['results']=$this->birthday_model->getvenues();
	$this->load->view('venue_delete-update',$data);
		 
}

public function delete_venue(){
				if($this->input->post('submit') == "delete" ){
				$id=$this->input->post('id');
				$data = array(
				'id'=>$id
				);
				$this->birthday_model->deleteVenue($data);
				$this->venue_forupdate();
				}
			else {
				$this->display_venue_data();
			}
		}
		 public function display_venue_data() {
		//	$this->load->view('update');
			$id=$this->input->post('id');
			
			
			$datasend = array (
								'id'=>$id,
								);
			$data = array();
            $data[ 'result' ] = $this->birthday_model->get_venue_contents($datasend);
            //echo $data[ $result[ 'name' ] ];	
		   $this->load->view('update_venue', $data); 
        }
	
		public function update_venue(){
		 if(isset($_POST['fileUpload'])){
			list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
					$imagepath="uploads/venue/".$filename.time().".".$extension;
					move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
		
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$address=$this->input->post('address');
		$price=$this->input->post('price');
		$capacity=$this->input->post('capacity');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'address' =>$address,
					   'price' =>$price,
					   'capacity'=>$capacity,
					   'image' =>$imagepath
					   
		);
		}
		else{
			$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$address=$this->input->post('address');
		$price=$this->input->post('price');
		$capacity=$this->input->post('capacity');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'address' =>$address,
					   'price' =>$price,
					   'capacity'=>$capacity
					   );
		}
		$this->birthday_model->update_venue($id,$data);
		$this->venue_forupdate();
		//$this->load->view('getID');
		} 

		public function admincakeadd(){
		      $this->load->view('admincakesadd');

}

public function addCake(){
	list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
          $imagepath="uploads/cakes/".$filename.time().".".$extension;
           move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
	$name=$this->input->post('name');
$desc=$this->input->post('description');
	//$message=$this->input->post('message');
	$price=$this->input->post('price');

$data = array(
'name'=>$name,
'description'=>$desc,
//'message'=>$message,
'price'=>$price,
'image'=>$imagepath
);

     $this->birthday_model->addContents('cakes',$data);
redirect('birthday_controller/admincakeadd');
}


////update delete cakes///

public function cakes_forupdate(){
	     $data['results']=$this->birthday_model->getcakes();
	$this->load->view('cake_delete-update',$data);
		 
}

public function update_cakes(){
				if($this->input->post('submit') == "delete" ){
				$id=$this->input->post('id');
				$data = array(
				'id'=>$id
				);
				$this->birthday_model->deleteCake($data);
				$this->cakes_forupdate();
				}
			else {
				$this->display_cake_data();
			}
		}
		 public function display_cake_data() {
		//	$this->load->view('update');
			$id=$this->input->post('id');
			
			$datasend = array (
								'id'=>$id,
								);
			$data = array();
            $data[ 'result' ] = $this->birthday_model->get_cake_contents($datasend);
            //echo $data[ $result[ 'name' ] ];	
		   $this->load->view('update_cakes', $data); 
        }
	
		public function update_cake(){
		 if(isset($_POST['fileUpload'])){
			list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
					$imagepath="uploads/venue/".$filename.time().".".$extension;
					move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
		
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$message=$this->input->post('message');
		$price=$this->input->post('price');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'message' =>$message,
					   'price' =>$price,
					   'image' =>$imagepath
					   
		);
		}
		else{
			$id=$this->input->post('id');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$message=$this->input->post('message');
		$price=$this->input->post('price');
		
		$data = array(
					   'name' =>$name,
					   'description' =>$description,
					   'message' =>$message,
					   'price' =>$price,
					   );
		}
		$this->birthday_model->update_cake($id,$data);
		$this->cakes_forupdate();
		//$this->load->view('getID');
		} 
}
?>