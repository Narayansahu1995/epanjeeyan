<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NgdrsController extends CI_Controller {
	// public function index1()
	// {
	// 	$data['show']=$this->db->query("SELECT DISTINCT(district_name_in_eng) as district FROM register_data ")->result();
	// 	$this->load->view('form',$data);
	// }
	// public function select_tahsil()
	// {

	// 	$district=$this->input->post("district");
	// 	$data1['show1']=$this->db->query("SELECT DISTINCT(tehcil_name_in_eng) as tahsil FROM register_data where district_name_in_eng='$district'")->result();
	// 	$this->load->view('form',$data1);
	// }
	// public function view()
	// {
	// 	$this->load->view('form');
	// }
	// public function viewajax()
	// {
	// 			$data=$this->db->query("SELECT DISTINCT(district_name_in_eng) as district FROM register_data ")->result();
	// 			$i=1;

	// 			echo "Select District : <select class='form-control'>";
	// 			foreach($data as $row)
	// 			{
					
	// 				echo "<option>".$row->district."</option>";
					
	// 				  // echo "<tr>";
	// 				  // echo "<td>".$i."</td>";
	// 				  // echo "<td>".$row->name."</td>";
	// 				  // echo "<td>".$row->email."</td>";
	// 				  // echo "<td>".$row->phone."</td>";
	// 				  // echo "<td>".$row->city."</td>";
	// 				  // echo "</tr>";
	// 				  // $i++;
	// 			}
	// 			echo "</select>";
	// }

	public function index(){
    // load base_url 
    $this->load->helper('url');
   
    //load model 
    $this->load->model('Main_model');
   
    // get cities 
    $data['cities'] = $this->Main_model->getDistrict();
   
    // load view 
    $this->load->view('ngdrs_view',$data); 
  }
  public function index2(){
    // load base_url 
    $this->load->helper('url');
   
    //load model 
    $this->load->model('Main_model');
   
    // get cities 
    $data['cities'] = $this->Main_model->getDistrict();
   
    // load view 
    $this->load->view('ngdrs2',$data); 
  }

  public function getCityDepartment(){ 
    // POST data 
    //$postData = "hello";
    echo "hello";
   exit();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data = $this->Main_model->getCityDepartment($postData);
    echo json_encode($data); 
  }

  public function getDepartmentUsers(){ 
    // POST data 
    $postData = $this->input->post();

    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data = $this->Main_model->getDepartmentUsers($postData);
    echo json_encode($data); 
  }
  public function viewajax()
	{
				$this->load->model('Main_model');
				$data=$this->db->get("city")->result();
				//print_r($data);
				
				foreach($data as $row)
				{
					
					 
					  echo "<option>".$row->cityname."</option>";
					
					 
				}
	}
	public function tahsil_selected()
	{
				$district = $this->input->post('district');
				$this->load->model('Main_model');
				$data=$this->db->query("select DISTINCT(tehcil_name_in_eng) as tahsil from register_data where district_name_in_eng='$district'")->result();
				//print_r($data);
				
				foreach($data as $row)
				{
					  
					  echo "<option>".$row->tahsil."</option>";
					 
					 
				}
	}
	public function village_selected()
	{
				$sel_city = $this->input->post('sel_city');
				$tahsil = $this->input->post('tahsil');
				$u_r = $this->input->post('u_r');
				//$this->load->model('Main_model');
				$data=$this->db->query("select DISTINCT(village_ward_name_in_eng) as village from register_data where district_name_in_eng='$sel_city' and tehcil_name_in_eng='$tahsil' and urban_rural='$u_r'")->result();
				// print_r($data);
				// exit();
				foreach($data as $row)
				{
					 
					 
					  echo "<option>".$row->village."</option>";
					 
					 
				}
	}
	public function SearchData()
	{
		$district = $this->input->post('district');
		$tahsil = $this->input->post('tahsil');
		$u_r = $this->input->post('u_r');
		$village = $this->input->post('village');

		$data['row']=$this->db->query("select * from register_data where district_name_in_eng='$district' and tehcil_name_in_eng='$tahsil' and urban_rural='$u_r' and village_ward_name_in_eng='$village'")->result();
		//print_r($data);exit();
		$this->load->view('RecordList',$data);
	}
	public function get_list()
	{
				$sel_city = $this->input->post('sel_city');
				$tahsil = $this->input->post('tahsil');
				$u_r = $this->input->post('u_r');
				$village = $this->input->post('village');
				//$this->load->model('Main_model');
				$data=$this->db->query("select * from register_data where district_name_in_eng='$sel_city' and tehcil_name_in_eng='$tahsil' and urban_rural='$u_r' and village_ward_name_in_eng='$village'")->result();
				// print_r($data);
				// exit();
				echo "<tr>";
				echo "<th>S.No.</th>";
				echo "<th>District</th>";
				echo "<th>Tahsil</th>";
				echo "<th>U/R</th>";
				echo "<th>Village</th>";
				echo "<th>Pincode</th>";
				echo "<th>Patwari h no.</th>";
				echo "<th>Ward No.</th>";
				echo "<th>Dolr code</th>";
				echo "<th>Location Type</th>";
				echo "<th>Location Name</th>";
				//echo "<th>Dolr code</th>";
				echo "<th>Open Land(in sq)</th>";
				echo "<th>Open Land(in hr)</th>";
				echo "<th>Irrigated Land(in hr)</th>";
				echo "<th>Non Irrigated Land(in sq)</th>";
				echo "<th>Unit</th>";
				echo "<th>SRO</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				$i=1;
				foreach($data as $row)
				{
					 
					 
					  // echo "<option>".$row->village."</option>";
					 echo "<tr>";
					 echo "<td>".$i++."</td>";
					 echo "<td>".$row->district_name_in_eng."</td>";
					 echo "<td>".$row->tehcil_name_in_eng."</td>";
					 echo "<td>".$row->urban_rural."</td>";
					 echo "<td>".$row->village_ward_name_in_eng."</td>";
					 echo "<td>".$row->pincode."</td>";
					 echo "<td>".$row->patwari_halka_no."</td>";
					 echo "<td>".$row->ward_num."</td>";
					 echo "<td>".$row->dolr_code."</td>";
					 echo "<td>".$row->location_type_in_eng."</td>";
					 echo "<td>".$row->location_name_in_eng."</td>";
					 echo "<td>".$row->open_land_sq."</td>";
					 echo "<td>".$row->open_land_hr."</td>";
					 echo "<td>".$row->irrigated_land_in_hr."</td>";
					 echo "<td>".$row->non_irrigated_land_in_hr."</td>";
					 echo "<td>".$row->unit_of_area_measurement."</td>";
					 echo "<td>".$row->sro."</td>";
					
					 echo "<td><button type='button' class='btn bg-success btn-sm update' data-bs-toggle='modal' data-keyboard='false' data-backdrop='static' data-bs-target='#update_data' 
					 data-bs-id='".$row->id."'
			
			
			><i class='fas fa-edit'></i></button>";
					  echo "<button type='button' class='btn bg-danger  delete btn-sm' data-id='".$row->id."'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					  echo "</tr>";
					 
				}
	}

public function saveRecord()
{
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$data=array(
		"division_name_in_eng"=>$this->input->post('division_name_in_eng'),
		"division_name_in_hindi"=>$this->input->post('division_name_in_hindi'),
		"district_name_in_eng"=>$this->input->post('district_name_in_eng'),
		"district_name_in_hindi"=>$this->input->post('district_name_in_hindi'),
		"tehcil_name_in_eng"=>$this->input->post('tehcil_name_in_eng'),
		"local_govt_body_type_in_eng"=>$this->input->post('local_govt_body_type_in_eng'),
		"local_govt_body_type_in_hindi"=>$this->input->post('local_govt_body_type_in_hindi'),
		"local_govt_body_name_in_eng"=>$this->input->post('local_govt_body_name_in_eng'),
		"local_govt_body_name_in_hindi"=>$this->input->post('local_govt_body_name_in_hindi'),
		"urban_rural"=>$this->input->post('urban_rural'),
		"village_ward_name_in_eng"=>$this->input->post('village_ward_name_in_eng'),
		"village_ward_name_in_hindi"=>$this->input->post('village_ward_name_in_hindi'),
		"pincode"=>$this->input->post('pincode'),
		"patwari_halka_no"=>$this->input->post('patwari_halka_no'),
		"ward_num"=>$this->input->post('ward_num'),
		"dolr_code"=>$this->input->post('dolr_code'),
		"location_type_in_eng"=>$this->input->post('location_type_in_eng'),
		"location_type_in_hindi"=>$this->input->post('location_type_in_hindi'),
		"location_name_in_eng"=>$this->input->post('location_name_in_eng'),
		"location_name_in_hindi"=>$this->input->post('location_name_in_hindi'),
		"open_land_sq"=>$this->input->post('open_land_sq'),
		"open_land_hr"=>$this->input->post('open_land_hr'),
		"irrigated_land_in_hr"=>$this->input->post('irrigated_land_in_hr'),
		"non_irrigated_land_in_hr"=>$this->input->post('non_irrigated_land_in_hr'),
		"unit_of_area_measurement"=>$this->input->post('unit_of_area_measurement'),
		"sro"=>$this->input->post('sro'),
	);
	$lid=$this->Main_model->SaveR($data);
	if ($lid>0) {
	return redirect("../index_data2");
	}
	}
}
public function updateRecord()
{
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$id=$this->input->post('id');
	$data=array(
		"division_name_in_eng"=>$this->input->post('division_name_in_eng'),
		"division_name_in_hindi"=>$this->input->post('division_name_in_hindi'),
		"district_name_in_eng"=>$this->input->post('district_name_in_eng'),
		"district_name_in_hindi"=>$this->input->post('district_name_in_hindi'),
		"tehcil_name_in_eng"=>$this->input->post('tehcil_name_in_eng'),
		"local_govt_body_type_in_eng"=>$this->input->post('local_govt_body_type_in_eng'),
		"local_govt_body_type_in_hindi"=>$this->input->post('local_govt_body_type_in_hindi'),
		"local_govt_body_name_in_eng"=>$this->input->post('local_govt_body_name_in_eng'),
		"local_govt_body_name_in_hindi"=>$this->input->post('local_govt_body_name_in_hindi'),
		"urban_rural"=>$this->input->post('urban_rural'),
		"village_ward_name_in_eng"=>$this->input->post('village_ward_name_in_eng'),
		"village_ward_name_in_hindi"=>$this->input->post('village_ward_name_in_hindi'),
		"pincode"=>$this->input->post('pincode'),
		"patwari_halka_no"=>$this->input->post('patwari_halka_no'),
		"ward_num"=>$this->input->post('ward_num'),
		"dolr_code"=>$this->input->post('dolr_code'),
		"location_type_in_eng"=>$this->input->post('location_type_in_eng'),
		"location_type_in_hindi"=>$this->input->post('location_type_in_hindi'),
		"location_name_in_eng"=>$this->input->post('location_name_in_eng'),
		"location_name_in_hindi"=>$this->input->post('location_name_in_hindi'),
		"open_land_sq"=>$this->input->post('open_land_sq'),
		"open_land_hr"=>$this->input->post('open_land_hr'),
		"irrigated_land_in_hr"=>$this->input->post('irrigated_land_in_hr'),
		"non_irrigated_land_in_hr"=>$this->input->post('non_irrigated_land_in_hr'),
		"unit_of_area_measurement"=>$this->input->post('unit_of_area_measurement'),
		"sro"=>$this->input->post('sro'),
	);
	$lid=$this->Main_model->UpdateR($data,$id);
	if ($lid>0) {
	return redirect("../SearchData");
	}
	}
}
public function login()
{
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$username=$this->input->post('username');	
	$password=$this->input->post('password');	
	$this->db->query("select * from test");
	}
	$this->load->view('login');
}
public	function deleterecords()
	{
		
			$id=$this->input->post('id');
			$this->db->query("delete from register_data where id='$id'");	
			echo json_encode(array(
				"statusCode"=>200
			));
		 
	}





}


?>