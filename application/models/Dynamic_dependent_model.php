<?php

class Dynamic_dependent_model extends CI_Model{

    public function fetch_district()
    {

        $this->db->order_by('districtname','ASC');
        $query = $this->db->get('district_master');
        return $query->result();

    }

    public function fetch_tehsil($districtid) {
        $this->db->where('divisiondistrictid', $districtid);
        $this->db->order_by('tehsilname', 'ASC');
        $query = $this->db->get('tehsil_master');
        $output = '<option value=""> Select tehsil </option>';
        foreach($query->result() as $row)
        {
            $output .= '<option value="'.$row->divisiondistrictid.'">'.$row->tehsilname.'</option>';

        }
        return $output;
    }
}

?> 