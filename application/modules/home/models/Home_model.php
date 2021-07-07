<?php
class Home_model extends CI_Model {
    
    public function link_video(){
        return $this->db->query("SELECT * FROM tbl_video WHERE status = '1' LIMIT 1")->result();
    }

    public function statistik(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $tanggal = date("Ymd");
        
        $r = $this->db->query("SELECT * FROM tbl_statistik_spcp WHERE ip = '$ip' AND tanggal = '$tanggal'")->result();

        if($r == NULL){
            $input_data['ip']       = $_SERVER['REMOTE_ADDR'];
            $input_data['tanggal']  = date("Ymd");
            $input_data['hits']     = '1';
            $input_data['online']   = time();

            $this->db->insert('tbl_statistik_spcp', $input_data);
        }else{
            $input_data['ip']       = $_SERVER['REMOTE_ADDR'];
            $input_data['tanggal']  = date("Ymd");
            $input_data['hits']     = $r[0]->hits + 1;
            $input_data['online']   = time();

            $this->db->where('ip', $ip)->update('tbl_statistik_spcp', $input_data);
        }

        return $this->db->query("SELECT SUM(hits) as hits FROM tbl_statistik_spcp")->result();
    }
}
