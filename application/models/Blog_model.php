<?php  

class Blog_model extends CI_Model
{

 

    public function category_wise_data($id)
    {
        $this->db->select('*')
                 ->from('post')
                 ->where('post.post_categoery',$id) 
                  ->join('category', 'category.id = post.post_categoery');
                  $query = $this->db->get();
                  
                  return $query->result();
                  
                  
    }
}
?>