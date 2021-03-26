<?php  

class Event_model extends CI_Model{

    public function event_saverecords($arrdata)
    {
        $this->db->insert('event',$arrdata);
          return $this->db->insert_id();
    }

    public function display_event()
    {
        $save=$this->db->select()
                ->get('event');
                return $save->result();
    }

    public function user_display_event($id)
    {
        $save=$this->db->where('id',$id)
                  ->get('event');
                  return $save->row_array();
    }
}

?>