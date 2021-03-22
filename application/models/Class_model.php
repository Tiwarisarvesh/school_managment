<?php 

class Class_model extends CI_Model

{

    public function class_display()
    {
        $result=$this->db->select()
                 ->get('class');
                 return $result->result();

    }

    public function class_getid($id)
    {
        $save=$this->db->where('id',$id)
                 ->get('class');
                 return $save->row_array();
    }

    public function update_records($class,$radio,$postby_id)
    {
	return $this->db->query("update class SET class_name='$class', active ='$radio' where id='$postby_id'");
	}
}

?>