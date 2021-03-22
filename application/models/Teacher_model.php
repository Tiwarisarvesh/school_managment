<?php  

class Teacher_model extends CI_Model{


    public function teacher_add($arr_data)
    {
        $this->db->insert('teacher',$arr_data);
          return $this->db->insert_id();
    }

    public function fetch_data()
    {
        $save=$this->db->select()
                ->get('teacher');
          return $save->result();
    }

    public function fetch_id($id)
    {
        $save=$this->db->where('id',$id)
                 ->get('teacher'); 
                 return $save->row_array();
    }

    public function update_record($id_no,$name,$gender,$dob,$email,$address,$pin_code,$phone,$image,$id)
    {
        //  Update With Image 

        return $query=$this->db->query("update teacher SET id_no='$id_no',teacher_name='$name',teacher_gender='$gender',
        teacher_dob='$dob' ,teacher_email='$email',teacher_address='$address',
        teacher_pin_code='$pin_code',teacher_phone='$phone',image='$image' where id='$id'");
    }

    public function update_record_without($id_no,$name,$gender,$dob,$email,$address,$pin_code,$phone,$id)
    {
        // Update Without image

        return $query=$this->db->query("update teacher SET id_no='$id_no',teacher_name='$name',teacher_gender='$gender',
        teacher_dob='$dob' ,teacher_email='$email',teacher_address='$address',
        teacher_pin_code='$pin_code',teacher_phone='$phone' where id='$id'");
    }
    
    public function teacher_delete($id)
    {
        return $this->db->where('id',$id)
                  ->delete('teacher');
    }
}

?>