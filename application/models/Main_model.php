<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

  // Get cities
  function getDistrict(){

    $response = array();
 
    // Select record
    $this->db->select('DISTINCT(district_name_in_eng) as district');
    $q = $this->db->get('register_data');
    $response = $q->result();

    return $response;
  }

  // Get City departments
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('DISTINCT(tehcil_name_in_eng) as tahsil');
    // $this->db->where('district_name_in_eng', $postData['city']);
    $q = $this->db->get('register_data');
    $response = $q->result();

    return $response;
  }

  // Get Department user
  function getDepartmentUsers($postData){
    $response = array();
 
    // Select record
    $this->db->select('DISTINCT(village_ward_name_in_eng) as village');
    $this->db->where('tehcil_name_in_eng', $postData['department']);
    $q = $this->db->get('register_data');
    $response = $q->result();

    return $response;
  }

  public function SaveR($data)
  {
   $this->db->insert("register_data",$data);
   $q=$this->db->insert_id();
   return $q;
  }
  public function UpdateR($data,$id)
  {
   $this->db->where("id",$id);
   $this->db->update("register_data",$data);
   $q=1;
   return $q;
  }

}