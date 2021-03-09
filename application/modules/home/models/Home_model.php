<?php
class Home_model extends CI_Model {
    
    public function link_video(){
        return $this->db->query("SELECT * FROM tbl_video WHERE status = '1' LIMIT 1")->result();
    }

}
