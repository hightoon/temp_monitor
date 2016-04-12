<?php

class Robo_user_model extends CI_Model{
    
    public function __construct(){

        $config['hostname'] = "localhost";
        $config['username'] = "root";
        $config['password'] = "ZJUisee423";
        $config['database'] = "ROBOS_USER";
        $config['dbdriver'] = "mysql";
        $config['dbprefix'] = "";
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = "";
        $config['char_set'] = "utf8";
        $config['dbcollat'] = "utf8_general_ci";
        $config['swap_pre'] = '';
        $config['autoinit'] = TRUE;
        $config['stricton'] = FALSE;

        $this->load->database($config);
    }
    
    public function getAllIp($start, $end){
    
        if($start == $end){
        
            $query = $this->db->get_where('robos_login_info', array('device_id'=>$start));
        
        }else{
        
            $query = $this->db->get_where('robos_login_info', array('device_id > '=>$start,'device_id < '=>$end));
        }
        
        return $query->result_array();
    }
}
?>
