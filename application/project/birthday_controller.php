
<?php
class birthday_controller extends CI_Controller {
	  function __construct()
        {
            parent::__construct();            
            $this->load->model('birthday_model');
				$this->load->helper(array('form', 'url'));
				      $this->load->view('header');

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
	$this->load->model('birthday_model');
     $this->birthday_model->insertData();
	
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
		
			
			$_SESSION['name']=$getid->name;
			$_SESSION['usrid']=$getid->customer_id;
			//$this->session->set_userdata('userid',$getid->customer_id);
			$usrid=$getid->customer_id;
		}
		
		      $this->load->view('index');

          return $this->get_user_cart_contents($getid->customer_id);

		
	}
	else
	{
	   echo "invalid username";
	   		     $this->load->view('login');

	}
}

function get_user_cart_contents($usrid)
{
//Loads the cart items which were stored by the particular user in database table
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
function logout_action()
{	$this->store_user_cart_contents();

//store cart contents from a user session into the database table
$this->session->unset_userdata('usrid');              //usrid is checked at each page to see if user is logged in, so on logout, unset usrid
$this->session->unset_userdata('session_id');
  session_unset();


return $this->tabs('login');
}

function store_user_cart_contents()
{
	$userid=$_SESSION['usrid'];
//$userid = $this->session->userdata('usrid');
//Deletes the old cart contents of the particular user to avoid duplication of user's cart contents
$this->db->where('user_id', $userid);
$q1=$this->db->delete('table_cart_data'); 
//Taking the slice of the cart_contents containing the cart items only. We do not need to store the ‘cart total’ or the ‘total items’.
//$contents = $this->session->userdata('cart_contents');
$contents=$this->cart->contents();
foreach($contents as $items)
{
//Insert new cart contents of user into database table
$sql = "Insert into ".'table_cart_data'." (user_id,row_id,product_id,name,price,qty,image) VALUES(".$userid.", '".$items['rowid']."', '".$items['id']."', '".$items['name']."', '".$items['price']."', '".$items['qty']."', '".$items['image']."')";
$q = $this->db->query($sql);
}
}

public function addToCart($table){
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
$table1="";
$table1.=$table;
$table1.="_id";

$data2 = array(
$table1 =>$cakeid,
'cust_id'=>$cust
);

     $this->birthday_model->addToCart($table,$data2,$cust,$data);
	 return $this->services($table);
	 
}

public function CakeAdd(){
		      $this->load->view('addCakes');

}
public function VenueAdd(){
		      $this->load->view('addvenue');

}


public function addCake(){
	list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
          $imagepath="uploads/cake/".$filename.time().".".$extension;
           move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imagepath);
	$name=$this->input->post('name');
$desc=$this->input->post('description');
	$message=$this->input->post('message');
	$price=$this->input->post('price');

$data = array(
'name'=>$name,
'description'=>$desc,
'message'=>$message,
'price'=>$price,
'image'=>$imagepath
);

     $this->birthday_model->addContents('cakes',$data);
		      return $this->cakes();
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
			$this->load->view('addvenue');
			
 }
 
 
 function addVideography($table,$viewNext){
	 
	list($filename, $extension) = explode('.', $_FILES['fileUpload']['name']);
						$imagepath="uploads/videography/".$filename.time().".".$extension;
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
			$this->load->view($viewNext);

	 
 }
 
 function videoAdd(){
	 			$this->load->view('addVideography');

 }
	 function cateringAdd(){
	 			$this->load->view('addCatering');

 }
 function decorAdd(){
	 			$this->load->view('addDecor');

 }
}
?>