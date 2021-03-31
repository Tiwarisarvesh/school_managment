<?php  

class Category_model extends CI_Model
{
 
    public function insert($data)
    {
        $this->db->insert('category',$data);
          return $this->db->insert_id();
    }

    public function display_category()
    {
        $save=$this->db->select()
                 ->get('category');
                 return $save->result();
    }

    public function get_by_id($id)
    {
        $save=$this->db->where('id',$id)
                 ->get('category');
                 return $save->row_array();
    }

    public function update_category($category,$radio,$id)
    {
        return $this->db->query("update category SET category_name='$category',category_status='$radio' where id='$id'");
    }

    public function delete_category($id)
    {
        $sara=$this->db->where('id',$id)
                 ->delete('category');
                 return $sara;
    }

} 

?>