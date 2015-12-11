<?php
class Dccpercontroller extends CI_Controller {
  //private $limit=5;
      function __construct()
        {
            parent::__construct();            
            $this->load->model('Dccpermodel');
                $this->load->library('table');
                $this->load->helper('url');     
        }

  
  /*public function show($page,$id){
    $data['results']=$this->dccperModel->getMembers();
    $data['memberDetails']=$this->dccperModel->getDetails($id);
    $data['memberTasks']=$this->dccperModel->getTasks($id);
    $this->load->view($page,$data);
        }
  */

      public function index(){
        $data['results']=$this->Dccpermodel->getMembers();
        $data['memberDetails']=NULL;
        $data['memberTasks']=NULL;
        $data["links"] = NULL;
        $this->load->view('main',$data);
      }
  



    public function show($page,$id){

      
      $this->load->library('pagination');
      //$this->load->library('table');
      $total_rows=$this->Dccpermodel->count($id);

      $config['base_url']=base_url("index.php/Dccpercontroller/show/main/$id");
      $config['total_rows']=$total_rows;
      $config['per_page']=5;
      $config['num_links']=0;

      $config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
      $config['full_tag_close'] = '</ul>'; 
      $config['num_tag_open'] = '<li>'; 
      $config['num_tag_close'] = '</li>'; 
      $config['cur_tag_open'] = '<li><span style="visibility:hidden">'; 
      $config['cur_tag_close'] = '</span></li>'; 
      $config['prev_tag_open'] = '<li>'; 
      $config['prev_tag_close'] = '</li>'; 
      $config['next_tag_open'] = '<li>'; 
      $config['next_tag_close'] = '</li>'; 
      $config['first_link'] = '&laquo;'; 
      $config['prev_link'] = '&lsaquo;'; 
      $config['last_link'] = '&raquo;'; 
      $config['next_link'] = '&rsaquo;'; 
      $config['first_tag_open'] = '<li>'; 
      $config['first_tag_close'] = '</li>'; 
      $config['last_tag_open'] = '<li>'; 
      $config['last_tag_close'] = '</li>';


      $this->pagination->initialize($config);

      $data['results']=$this->Dccpermodel->getMembers();
      $data['memberDetails']=$this->Dccpermodel->getDetails($id);
      $data['memberTasks']=$this->Dccpermodel->getTasks($id,$config['per_page'],$this->uri->segment(5));

      $data['links']=$this->pagination->create_links();
      //$data['rows']=$this->dccperModel->count($id);
    $this->load->view($page,$data);
        }




  public function nameid($id){
    $data['resultname']=$this->DccperModel->getname($id);
  }

  public function settings(){
    $this->load->view('settings');
  }


  /*public function memberInfo($id){
      $data['memberDetails']=$this->dccperModel->getDetails($id);
      $this->load->view('main',$data);
  }
  */


}

?>