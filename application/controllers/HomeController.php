<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class HomeController extends CI_Controller {

	
	public function __construct() {
        parent::__construct();

       $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('NgdrsModels');
		$this->load->database();
        $this->load->library('session');
        $this->session->set_flashdata('msg', 'Are you sure want to leave');
        session_start();


    }

	// public function login()
    // {
    //     $this->load->library('form_validation');
    //     $this->load->library('session');


    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //         // Form validation rules
    //         $this->form_validation->set_rules('username', 'Username', 'required');
    //         $this->form_validation->set_rules('password', 'Password', 'required');


    //         $recaptchaResponse = $this->input->post('g-recaptcha-response');
    //         $url = 'https://www.google.com/recaptcha/api/siteverify';
    //         $data = array(
    //             'secret' => '6LePotUpAAAAANSBHcIPmZ-P6PFn-SpLfAfy17du', // Replace YOUR_SECRET_KEY with your actual secret key
    //             'response' => $recaptchaResponse
    //         );
    
    //         $options = array(
    //             'http' => array(
    //                 'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    //                 'method' => 'POST',
    //                 'content' => http_build_query($data)
    //             )
    //         );
    
    //         $context = stream_context_create($options);
    //         $verify = file_get_contents($url, false, $context);
    //         $captcha_success = json_decode($verify);

    //         if ($this->form_validation->run() == FALSE) {
                
    //             return redirect('../login?null_vali');
    //         }else{
    //             if ($captcha_success->success) {
    //                 // reCAPTCHA verification passed, proceed with login
    //                 $username = $this->input->post('username');
    //                 $password = $this->input->post('password');

                   
    //                 $query['test'] = $this->db->query("select * from sr_info where username='$username' and password='$password'")->result();
                    
    //                 // $sessionId = $this->session->session_id;
    //                 // print_r($username);
    //                 // print_r($password);
    //                 // print_r($query);
    //                 // exit();
                    
    //                 if (count($query['test']) <= 0) {
    //                     return redirect('../login?invalid');
    //                 } else {
                         
                        

    //                     $existingSession = $this->db->get_where('active_sessions', array('user_id' => $query['test'][0]->id,'session_id' => session_id()))->row();
                        
    //                     if ($existingSession) {
    //                         //$this->db->where('user_id', $id)->delete('active_sessions');

    //                         return redirect('../login?multiple_sessions');
    //                     }


    //                     if (count($query['test']) <= 0) {
    //                         return redirect('../login?invalid');
    //                     } else {
    //                         // Set session data
    //                         $id = $query['test'][0]->id;
    //                         $data = $query['test'][0]->district_id;
    //                         $data2 = $query['test'][0]->sro_name;
    //                         $data3 = $query['test'][0]->tehsil_id;
            
    //                         $this->session->set_userdata('sro_id', $id);
    //                         $this->session->set_userdata('sro', $data);
    //                         $this->session->set_userdata('srouser', $data2);
    //                         $this->session->set_userdata('tehsil_id', $data3);

    //                         // $cookie = array(
    //                         //     'name'   => $id,
    //                         //     'value'  => $data, 
    //                         //     'expire' => '200', // Cookie expiration time, in seconds
    //                         //     'secure' => TRUE // Set the Secure flag
    //                         // );
                    
    //                         // $this->input->set_cookie($cookie);
                            
            
                            
    //                     }
                        
                        
    //                     $this->db->insert('active_sessions', array('user_id' => $id, 'session_id' => session_id()));
    //                     // print_r(session_id);
    //                     // die;
        
    //                     return redirect('../home');
    //                 }
    //             } else {
    //                 // reCAPTCHA verification failed
    //                 return redirect('../login?captcha_failed');
    //             }
    //         }

        
                
    //     }else{
            
    //         $this->load->view('login');

    //     }
        
        
    // }


    public function login() {
        // If form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $inputCaptcha = $this->input->post('captcha');
                  
            // Get the stored captcha code from session
           
           $sessCaptcha = $this->session->userdata('captchaCode');
           
            // Compare input captcha with stored captcha
            if ($this->form_validation->run() == FALSE ) {

                return redirect('../login?null_vali');
               
            } elseif($inputCaptcha != $sessCaptcha){

                return redirect('../login?captcha_failed');
            }
            
            else {

                $query['test'] = $this->db->query("select * from sr_info where username='$username' and password='$password'")->result();
                    
                    
                    
                if (count($query['test']) <= 0) {
                    return redirect('../login?invalid');
                }else{


                    $existingSession = $this->db->get_where('active_sessions', array('user_id' => $query['test'][0]->id,'session_id' => session_id()))->row();
                        
                                        if ($existingSession) {
                                            //$this->db->where('user_id', $id)->delete('active_sessions');
                
                                            return redirect('../login?multiple_sessions');
                                        }
                
                
                                        if (count($query['test']) <= 0) {
                                            return redirect('../login?invalid');
                                        } else {
                                            // Set session data
                                            $id = $query['test'][0]->id;
                                            $data = $query['test'][0]->district_id;
                                            $data2 = $query['test'][0]->sro_name;
                                            $data3 = $query['test'][0]->tehsil_id;
                            
                                            $this->session->set_userdata('sro_id', $id);
                                            $this->session->set_userdata('sro', $data);
                                            $this->session->set_userdata('srouser', $data2);
                                            $this->session->set_userdata('tehsil_id', $data3);
                                        }
                                   
                                        $this->db->insert('active_sessions', array('user_id' => $id, 'session_id' => session_id()));
                                        // print_r(session_id);
                                        // die;
                        
                                        return redirect('../home');

                }      
            }
        }
        
        // Captcha configuration
        $config = array(
            'word' => '',
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url('captcha_images/'), // Use base_url() to generate correct URL
            'font_path'     => FCPATH . 'system/fonts/texb.ttf', // Use FCPATH to specify absolute path
            'img_width'     => 200  ,
            'img_height'    => 50,
            'word_length'   => 8,
            'font_size'     => 18,
            'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
        );
        
        // Create captcha
        $captcha = create_captcha($config);
        // var_dump($captcha);
        // Store captcha word in session
        $this->session->set_userdata('captchaCode', $captcha['word']);
        $sessCaptcha = $this->session->userdata('captchaCode');
        // print_r($sessCaptcha);
  
        // Pass captcha image and form to view
        $data['captchaImg'] = $captcha['image'];
        $this->load->view('login', $data);
    }

    public function execute_query() {

        $sro_id = $this->session->userdata('sro_id');

        $this->load->model('NgdrsModels');

        $this->NgdrsModels->your_query_method($sro_id);
        $this->session->sess_destroy();
        echo "Query executed successfully.";
    }

	public function index2()
	{

		$id_sro = $this->session->userdata('sro_id');
		$data_sro = $this->session->userdata('sro');
		$username = $this->session->userdata('username');

		$query['test'] = $this->db->query("select * from active_sessions where user_id='$id_sro'")->result();
         $active_sess_id = $query['test'][0]->session_id;
		// print_r($data_sro);
		// exit();
		if($data_sro > 0){
            $data_user['username'] = $username;
			$this->load->view('index2',$data_user);
            
		}else{
           
			$this->load->library('session');
            $this->session->sess_regenerate();
            
            if (!$this->session->userdata('logged_in')) {

                
                return redirect('../login');

            }
		}
		
	}


	public function bodyname() {

		$sr_name=$this->session->userdata('sro');
                    
        $test2['test']=$this->db->query("select * from reports where r_district_english ='$sr_name'")->result();

		$id = $test2['test'][0]->sro;

		$test['data']=$this->db->query("select local_body_name_english from reports where sro ='$id'")->result();



		$this->load->view('dumy_search',$test);

	}

	// public function form_uploads() {
	// 	$this->load->view('uploads');
	// }

	function uploadDoc()
	{
		$uploadPath = 'assets2/uploads/imports/';
		if(!is_dir($uploadPath))
		{
			mkdir($uploadPath,0777,TRUE);  // FOR CREATING DIRECTORY IF ITS NOT EXIST
		}

		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'csv|xlsx|xls';
		$config['max_size'] = 1000000;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('upload_excel'))
		{
			$fileData = $this->upload->data();
			return $fileData['file_name'];
		}
		else
		{
			return false;
		}
	}

	public function form_elements(){
		$this->load->view('forms-elements');
	}

	public function form_editors(){
		$this->load->view('forms-editors');
	}

	public function form_layouts(){
		$this->load->view('forms-layouts');
	}

	public function form_validation(){
		$this->load->view('forms-validation');
	}

	public function table_data(){
		$this->load->view('tables-data');
	}

	public function table_general(){
		$this->load->view('tables-general');
	}

	public function form_search(){
		
		// $data['test'] = $this->db->get('district_master')->result();

		$district=$this->session->userdata('sro_id');

		$data['test'] = $this->db->query("select * from sr_info where id = '$district'")->result();

       
		$data_sro = $this->session->userdata('sro');
		
		if($data_sro > 0){
            $this->load->view('forms_search', $data); 
		}else{
            $this->load->library('session');
            $this->session->sess_regenerate();
            
            if (!$this->session->userdata('logged_in')) {

                
                return redirect('../login');

            }
        }
		// print_r($data);
		// exit();
		
		

	} 

	public function form_search_db()
	{

		
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$district=$this->input->post('district');
			// $district=$this->session->userdata('sro');
			$tehsil=$this->input->post('tehsil');
			$ur=$this->input->post('ur');
			$body_type=$this->input->post('body_type');
			$id_sro=$this->input->post('sro_id');
			$data=$this->db->query("select * from  reports where r_district_english='$district' and tahsil_english='$tehsil' and ur='$ur' and local_body_type_english='$body_type' and sro = '$id_sro'" )->result();
			// print_r($district);
			// echo "<br>";
			// print_r($tehsil); 
			// echo "<br>";
			// print_r($ur);
			// echo "<br>";
			//  print_r($body_type);
			//  echo "<br>";
			// print_r($data);
			// exit;
			if (count($data)>0) {
				$_SESSION['district']=$district;
				$_SESSION['tehsil']=$tehsil;
				$_SESSION['ur']=$ur;
				$_SESSION['body_type']=$body_type;
				$_SESSION['sro_id'] = $id_sro;
				return redirect('../recordList');
			}else{
				return redirect('../recordList?invalid');
			}
		}
	}

    public function forgot_page() {

        $this->load->view('forgot-mobile');
        
    }
	

	public function viewajax()
	{
		// $id = $this->input->post('district');
		$id = $this->session->userdata('tehsil_id');

		
		//echo $id;

		$this->db->where("tehsil_id",$id);
				// $this->load->model('Main_model');
				$data=$this->db->get("tehsil_master")->result();
				//print_r($data);
				echo "<option selected>-- select tehsil --</option>";
				foreach($data as $row)
				{
					
					 
					  echo "<option value='".$row->tehsil_id."'>".$row->tehsil_english."</option>";
					
					 
				}
	}
	public function select_body()
	{
	
				$ur = $this->input->post('ur');
				if($ur == 1){
				
				$data=$this->db->query("select * from  bodytype_master where  ur_id='$ur'")->result();
				
				foreach($data as $row)
				{
					 
					 
					  echo "<option value='".$row->b_id."'>".$row->bodytype_english."</option>";
					 
					 
				}
			}else if($ur == 2){
				$data=$this->db->query("select * from  bodytype_master where  ur_id='$ur'")->result();
				
				foreach($data as $row)
				{
					 
					 
					echo "<option value='".$row->b_id."'>".$row->bodytype_english."</option>";
					 
				}
			}
	}

	


	public function edit_form(){
        $id = $this->input->get('id');
        $data['test'] = $this->db->where("id", $id)->get('reports')->result();
    
        
        $ward_name_english = $data['test'][0]->ward_name_english;
        $area_village_english = $data['test'][0]->area_village_english;
		$ur_id = $data['test'][0]->ur;

		if($ur_id == 2){
			$this->db->select('*, 
                MAX(CASE WHEN rate_flag = "W" THEN beyond_20m_sq END) AS within_20m_sq, 
                MAX(CASE WHEN rate_flag = "B" THEN beyond_20m_sq END) AS beyond_20m_sq, 
                MAX(CASE WHEN rate_flag = "A" THEN beyond_20m_sq END) AS all_type_mr, 
                MAX(CASE WHEN rate_flag = "I" THEN beyond_20m_sq END) AS irrigated, 
                MAX(CASE WHEN rate_flag = "NI" THEN beyond_20m_sq END) AS non_irrigated');
                $this->db->from('reports');
                $this->db->where('ur', '2');
                $this->db->where('ward_name_english', $ward_name_english);
                $this->db->group_by('ward_name_english');
            
                $query = $this->db->get();
                $result['test2'] = $query->result();
		}else if($ur_id == 1){
			$this->db->select('*, 
                MAX(CASE WHEN rate_flag = "W" THEN beyond_20m_sq END) AS within_20m_sq, 
                MAX(CASE WHEN rate_flag = "B" THEN beyond_20m_sq END) AS beyond_20m_sq');
                $this->db->from('reports');
                $this->db->where('ur', '1');
                $this->db->where('area_village_english', $area_village_english);
                
                $this->db->group_by('area_village_english');
            
                $query = $this->db->get();
                $result['test2'] = $query->result();
		}
    
        
        $this->load->view('record_edit', $result);
    }


	public function create_new()
	{

		$id=$this->input->get('q');
		$data['test'] = $this->db->where("id",$id)->get('reports')->result();

		// $data['test'] = $this->db->get('district_master')->result();
		$this->load->view('create-new',$data);
	}


	public function recordList_data()
	{

		if (!isset($_SESSION['district'])) {
		return redirect("../forms-search?invalid");
		}
		$district=$_SESSION['district'];
		$tehsil =$_SESSION['tehsil'];
		$ur=$_SESSION['ur'];
		$body_type=	$_SESSION['body_type'];
		$id_sro = $_SESSION['sro_id'] ;

		// $data=$this->db->query("select * from  reports where r_district_english='$district' and tahsil_english='$tehsil' and ur='$ur' and local_body_type_english='$body_type' and sro = '$id_sro'" )->result();
	

		// $test  =  $_SESSION['sro'];
		// print_r($test);
		// exit();

		//  print_r($district);
		// 	print_r($tehsil);
		// 	print_r($ur);
		// 	print_r($body_type);
		//  print_r($data);
		//  exit;

		$data['list']=$this->NgdrsModels->search($district,$tehsil,$ur,$body_type,$id_sro);
			if (count($data)>0) {
				

			}


		$this->load->view('report_list',$data);
	}

	public function previewList()
	{
		if (!isset($_SESSION['district'])) {
		return redirect("../forms-search?invalid");
		}
		$district=$_SESSION['district'];
		$tehsil =$_SESSION['tehsil'];
		$ur=$_SESSION['ur'];
		$body_type=	$_SESSION['body_type'];
        $id_sro = $_SESSION['sro_id'];

		//  print_r($district);
		// 	print_r($tehsil);
		// 	print_r($ur);
		// 	print_r($body_type);
		//  print_r($data);
		//  exit;

		$data['list']=$this->NgdrsModels->search($district,$tehsil,$ur,$body_type,$id_sro);
			if (count($data)>0) {
				

			}


		$this->load->view('preview',$data);
	}

	
	public function edit_db(){


		if($_SESSION['ur'] == 1){
			$id=$this->input->post('id');
		    $id2 = $id + 1;

			$value_1 = $this->input->post('within');
		    $value_2 = $this->input->post('beyond');


			$id_value_pairs = array(
                $id => $value_1,
                $id2 => $value_2
            );

			foreach ($id_value_pairs as $id => $value) {
                
                $this->db->set('beyond_20m_sq', $value);
                $this->db->where('id', $id);
                $this->db->update('reports');
            }

            
            $updated = $this->db->affected_rows() > 0;
            if ($updated) {
            	
                return redirect('../recordList?updated');

            } else {
                
               return redirect('../recordList?invalid');
            }

		}else{
			
			$id=$this->input->post('id');
			$id2 = $id + 1;
			$id3 = $id2 + 1;
			$id4 = $id3 + 1;
			$id5 = $id4 + 1;

			$value_1 = $this->input->post('within');
			$value_2 = $this->input->post('beyond');
    		$value_3 = $this->input->post('all_type');
    		$value_4 = $this->input->post('irrigated');
            $value_5 = $this->input->post('non_irrigated');
            
            
            $id_value_pairs = array(
                $id => $value_1,
                $id2 => $value_2,
                $id3 => $value_3,
                $id4 => $value_4,
                $id5 => $value_5
            );

          
            foreach ($id_value_pairs as $id => $value) {
                
                $this->db->set('beyond_20m_sq', $value);
                $this->db->where('id', $id);
                $this->db->update('reports');
            }

            
            $updated = $this->db->affected_rows() > 0;
            if (!$updated) {
                
               return redirect('../recordList?invalid');

            } else {
                
               return redirect('../recordList?updated');
            }
    
        
    	}
    		
    }
	public	function deleterecords()
	{
		
			$id=$this->input->post('d_id');
			$this->db->query("delete from reports where id='$id'");	
			echo json_encode(array(
				"statusCode"=>200
			));
		 
	}
 

	public function new_add_db(){

		$state_eng = $this->input->post('state_english');
		$state_hindi = $this->input->post('state_hindi');
		$division_eng = $this->input->post('division_english');
		$division_hindi = $this->input->post('division_hindi');
		$r_district = $this->input->post('district1');
		$igr_district = $this->input->post('district');
		$tehsil = $this->input->post('tehsil');
		$ur = $this->input->post('urban_rural');
		$body_type_eng = $this->input->post('body_type_english');
		$body_name_eng = $this->input->post('body_name_english');
		$body_name_hindi = $this->input->post('body_name_hindi');
		$patwari_halka = $this->input->post('phn');
		$ward_no = $this->input->post('ward_no');
		$ward_name_eng = $this->input->post('ward_name_english');
		$ward_name_hindi = $this->input->post('ward_name_hindi');
		$pin_code = $this->input->post('pin_code');
		$area_eng = $this->input->post('area_vlg_eng');
		$area_hindi = $this->input->post('area_vlg_hindi');
		$within = $this->input->post('within_square');
		$beyond = $this->input->post('beyond_square');
		$all_type = $this->input->post('all_type');
		$irrigated = $this->input->post('irrigated_type');
		$non_irrigated = $this->input->post('non_irrigated_type');
		$sro_name = $this->input->post('sro_name');
		$description = $this->input->post('descrip');

		// print_r($r_district);
		// print_r($igr_district);
		// print_r($tehsil);
		// print_r($ur);
		// print_r($body_type_eng);
		
		// exit();
		

		if($ur == 1){
			$data = array(
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $within,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'W',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            ),
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $beyond,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'B',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            )
        );

		}else{
			$data = array(
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $within,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'W',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            ),
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $beyond,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'B',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            ),
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $all_type,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'A',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            ),
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $irrigated,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'I',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            ),
            array(
                'state_english' => $state_eng,
                'state_hindi' => $state_hindi,
                'division_english' => $division_eng,
                'division_hindi' => $division_hindi,
                'r_district_english' => $r_district,
                'r_district_hindi' => null,
                'igr_district_english' => $igr_district,
                'igr_district_hindi' => null,
                'tahsil_english' => $tehsil,
                'tahsil_hindi' => null,
                'ric' => null,
                'phn' => $patwari_halka,
                'ur' => $ur,
                'local_body_type_english' => $body_type_eng,
                'local_body_type_hindi' => null,
                'local_body_name_english' => $body_name_eng,
                'local_body_name_hindi' => $body_name_hindi,
                'ward_no' => $ward_no,
                'ward_name_english' => $ward_name_eng,
                'ward_name_hindi' => $ward_name_hindi,
                'pincode' => $pin_code,
                'area_village_english' => $area_eng,
                'area_village_hindi' => $area_hindi,
                'description' => $description,
                'beyond_20m_sq' => $non_irrigated,
                'within_20m_sq' => null,
                'all_type_mr' => null,
                'irrigated' => null,
                'non_irrigated' => null,
                'rate_flag' => 'NI',
                'unit' => null,
                'sro' => $sro_name,
                'slabcode' => null,
                'remark' => null
                
            )
          );
		}
		

		

        // Insert data
        $this->db->insert_batch('reports', $data);

		if ($this->db->affected_rows() > 0) {
           
		   return redirect('../recordList?added');
        } else {
            
			return redirect('../recordList?not_add');
        }

	}

	
	public function logout_user() {
    
        $this->db->delete('active_sessions', array('user_id' => $this->session->userdata('sro_id')));
    
        // Destroy session
        $this->session->sess_destroy();
    
        return redirect('../');
    }
	
    public function back_button(){

        return redirect('../recordList');
        
    }
    public function verify_fun(){

        $mobile = $this->input->post('username');
    
        $data=$this->db->query("select * from  sr_info where mobile_no='$mobile'")->result();

        // print_r(count($data));
        // exit(); 

        if(count($data)<= 0){
             return redirect('../forgot');
        }else{

                $_SESSION['mobile']=$mobile;
           
            $this->load->view('forgot-verify');
        }


        
    }

    public function verify_submit(){



        $this->load->library('form_validation');

        $mobile = $_SESSION['mobile'];
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
           
            $this->load->view('forgot-verify');
        } else {
            
            $otp = $this->input->post('otp');
            $password = md5($this->input->post('password'));

            $this->db->query("update sr_info set password = '$password', otp_no = '$otp' where mobile_no='$mobile'");

            return redirect('../login');
            
        }   
    }

} 
