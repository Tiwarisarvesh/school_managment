<?php 

class Post_model extends CI_Model
{
    public function insert_post($data)
    {
        $this->db->insert('post',$data);
          return $this->db->insert_id();
    }
    
    public function display_post_categoery()
    {
        $this->db->select('*')
                 ->from('category')
                  ->join('post', 'category.id = post.post_categoery');
                  $query = $this->db->get();
                  return $query->result();
                  
    }
    public function get_by_id_update($id)
    {
        $this->db->select('*')
                 ->where('post.id',$id)
                 ->from('category')
                 ->join('post', 'category.id = post.post_categoery');
                  $query = $this->db->get();
                  return $query->row_array();
                  
    }

    public function post_update($post_code,$post_title,$post_categoery,$post_number,$id)
    {
         echo "update post SET post_code='$post_code',post_title='$post_title',post_categoery='$post_categoery',post_number='$post_number' where id='$id'";

        return $this->db->query("update post SET post_code='$post_code',post_title='$post_title',post_categoery='$post_categoery',post_number='$post_number' where id='$id'");
    }

    public function delete_post($id)
    {
        return $this->db->where('id',$id)
                  ->delete('post');
    }



}
?>