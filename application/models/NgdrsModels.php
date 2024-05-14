<?php

class NgdrsModels extends CI_Model
{

	
	public function search($district,$tehsil,$ur,$body_type,$id_sro)
	{
		
		
		
		if($_SESSION['ur'] == 1 ){
			// $q=$this->db->query("select * from  reports where r_district_english='$district' and tahsil_english='$tehsil' and local_body_type_english='$body_type' and ur='$ur' and sro='$id_sro'" )->result();
		    $q2 = $this->db->query("WITH FilteredReports AS (
                    SELECT 
                        reports.*, 
                        sr_info.sro_name -- Assuming you need some additional columns from sr_info
                    FROM 
                        reports 
                    INNER JOIN 
                        sr_info 
                    ON 
                        reports.sro = sr_info.id
                    WHERE 
                        r_district_english = '$district' AND 
                        tahsil_english = '$tehsil' AND 
                        local_body_type_english = '$body_type' AND 
                        ur = '$ur' AND 
                        sro = '$id_sro'
                )
                SELECT 
                    fr.*,
                    -- Assuming you want to include some additional columns from sr_info in your final SELECT
                    MAX(CASE WHEN fr.rate_flag = 'W' THEN fr.beyond_20m_sq END) AS within_20m_sq,
                    MAX(CASE WHEN fr.rate_flag = 'B' THEN fr.beyond_20m_sq END) AS beyond_20m_sq
                FROM 
                    FilteredReports fr
                WHERE 
                    fr.ur = '1'
                GROUP BY 
                    fr.local_body_name_english, 
                	fr.ward_no,
                    fr.ward_name_english, 
                    fr.area_village_english;" )->result();
			
		}else{
			// $q=$this->db->query("select * from  reports where r_district_english='$district' and tahsil_english='$tehsil' and local_body_type_english='$body_type' and ur='$ur' and sro='$id_sro'" )->result();
			$q2 = $this->db->query("WITH FilteredReports AS (
                    SELECT 
                        reports.*, 
                        sr_info.sro_name -- Assuming you need some additional columns from sr_info
                    FROM 
                        reports 
                    INNER JOIN 
                        sr_info 
                    ON 
                        reports.sro = sr_info.id
                    WHERE 
                        r_district_english = '$district' AND 
                        tahsil_english = '$tehsil' AND 
                        local_body_type_english = '$body_type' AND 
                        ur = '$ur' AND 
                        sro = '$id_sro'
                )
                SELECT 
                    CAST(fr.phn AS UNSIGNED) AS phn, -- Cast phn to unsigned integer for proper sorting
                    fr.*,
                    -- Assuming you want to include some additional columns from sr_info in your final SELECT
					MAX(CASE WHEN fr.rate_flag = 'B' THEN fr.beyond_20m_sq END) AS beyond_20m_sq,
                    MAX(CASE WHEN fr.rate_flag = 'W' THEN fr.beyond_20m_sq END) AS within_20m_sq,
                    MAX(CASE WHEN fr.rate_flag = 'A' THEN fr.beyond_20m_sq END) AS all_type_mr,
                    MAX(CASE WHEN fr.rate_flag = 'I' THEN fr.beyond_20m_sq END) AS irrigated,
                    MAX(CASE WHEN fr.rate_flag = 'NI' THEN fr.beyond_20m_sq END) AS non_irrigated
                    
                FROM 
                    FilteredReports fr
                WHERE 
                    fr.ur = '2'
                GROUP BY 
                	CAST(fr.phn AS UNSIGNED),
                    fr.ward_name_english ORDER BY 
    CAST(fr.phn AS UNSIGNED);" )->result();
		}
		return $q2;
	}

	public function search_format($test)
	{
		$q=$this->db->query("SELECT area_village_english, max(case when rate_flag = 'W' then beyond_20m_sq end) within_20m_sq, max(case when rate_flag = 'B' then beyond_20m_sq end) beyond_20m_sq from reports group by area_village_english;" )->result();
		return $q;
	}
	public function your_query_method($sro_id)
	{
		$q= $this->db->delete('active_sessions', array('user_id' => $sro_id));
        return $q;
	}


	public function edit_list_rural($id,$id2,$id3,$id4,$id5,$value_1,$value_2,$value_3,$value_4,$value_5)
	{

		$q=$this->db->query("insert into reports(id,beyond_20m_sq) values($value1,$value_1),($value2,$value_2),($value3,$value_3),($value4,$value_4),($value5,$value_5) on duplicate key update beyond_20m_sq=values(beyond_20m_sq);")->result();
		return $q;
		
	}
	public function edit_list_urban($id,$id2,$value_1,$value_2)
	{

		
		$q=$this->db->query("insert into reports(id,beyond_20m_sq) values($value1,$value_1),($value2,$value_2) on duplicate key update beyond_20m_sq=values(beyond_20m_sq);" )->result();
		return $q;
		
	}

	// public function getItemById($id){
	// 	$query = $this->db->get_where('reports',array('id' => $id));
	// 	return $query->row_array();
	// }
}

?>