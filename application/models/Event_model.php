<?php  

class Event_model extends CI_Model{

    public function event_saverecords($arrdata)
    {
        $this->db->insert('event',$arrdata);
          return $this->db->insert_id();
    }
}

?>