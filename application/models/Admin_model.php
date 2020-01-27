<?php

class Admin_model extends CI_Model {


	public function if_exists($table,$where){

        $this->db->where($where);
        $query = $this->db->get($this->db->dbprefix.$table);
        if ($query->num_rows() > 0){
            $login_user = $query->row();
            return $login_user;
        }else{
            return false;
        }

	}

    public function check_session(){

        
        if($this->session->userdata('user_id') == ""){
            redirect('login');    
        }
    
    }

    // function get_first($table,$field,$field_value,$limit=1,$offset=0){
        
    //     return $this->db->get_where($this->db->dbprefix.$table, array($field => $field_value), $limit, $offset);

    // }

    public function get_last_record($table,$field){

         return $this->db->order_by($field,"desc")
        ->limit(1)
        ->get($this->db->dbprefix.$table)
        ->row();
    }

    public function count($table,$where){

         $this->db->select('COUNT(*) as count');
         $this->db->where($where);
         return $this->db->get($this->db->dbprefix.$table)->row();
    
    }

    public function insert($table,$data){
    
        $this->db->insert($table, $data);
        return $insert_id = $this->db->insert_id();
    
    }

    public function insert_multiple($table,$data){
    
        return $this->db->insert_batch($this->db->dbprefix.$table, $data); 
    
    }


    public function update_one($table,$data){
        
        return $this->db->update($table, $data);
    
    }

    public function update($table,$where,$data){
        
        $this->db->where($where);
        return $this->db->update($table, $data);
    
    }

    public function get_all($table){

        $this->db->order_by('created_at','DESC');
        return $this->db->get($this->db->dbprefix.$table);

    }

    public function get_where($table,$column,$column_value){
        
        $this->db->where($column,$column_value);
        return $this->db->get($this->db->dbprefix.$table);        

    }

    public function get_last_id($table,$column){

        $this->db->select($column);
        $this->db->order_by($column,'DESC');
        $this->db->limit(1);
        return $this->db->get($this->db->dbprefix.$table)->row();
        
    }

    public function delete($table,$where){

        $this->db->where($where);
        return $this->db->delete($this->db->dbprefix.$table);

    }

}

?>
