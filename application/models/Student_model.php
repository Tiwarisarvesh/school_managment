<?php  

class student_model extends CI_Model{



    public function student_add($arrdata)
    {
        $this->db->insert('student',$arrdata);
          return $this->db->insert_id();
    }

    public function student_display()
    {
        $save=$this->db->select()
                 ->get('student');
             return $save->result();
    }

    public function student_get_id($id)
    {
        $save=$this->db->where('id',$id)
                 ->get('student');
                 return $save->row_array();
    }

    public function student_update($student_roll,$student_name,$student_gender,$student_dob,
                                                                  $student_religion,$student_class,$student_phone,$id)
    {
       
       return $this->db->query("update student  SET student_roll='$student_roll',student_name='$student_name',
        student_gender='$student_gender',student_dob='$student_dob',student_religion='$student_religion',
        student_class='$student_class',student_phone='$student_phone' where id='$id'");
    }

    public function student_delete($id)
    {
        $this->db->where('id',$id)
                ->delete('student');
    }
}



?>