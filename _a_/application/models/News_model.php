<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model {
    public function __construct() {
    }
    function add($data) {
        $this->db->trans_start();
        $this->db->insert('post', $data);
        $id = $this->db->insert_id();
        $this->db->trans_complete();
        return $id;
    }
    function update($where, $data) {
        $this->db->trans_start();
        
        if (isset($where)) {
            foreach ($where as $key => $value) {
                
                $this->db->where($key, $value);
            }
        }
        
        
        $result = $this->db->update('post', $data);
        $this->db->trans_complete();
        return $result;
    }
    function get($arr = array()) {
        $this->db->select('*');
        $this->db->from('post');
        if (isset($arr['where'])) {
            foreach ($arr['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        
        if (isset($arr['like'])) {
            foreach ($arr['like'] as $key => $value) {
                $this->db->like($key, $value[0], $value[1]); 
                
            }
        }
        
        if (isset($arr['order'])) {
            foreach ($arr['order'] as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        if (isset($arr['limit'])) {
            $this->db->limit($arr['limit'][0], $arr['limit'][1]);
        }
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return null;
        } else {
            $dataset = $query->result();
            
            return $dataset;
        }
    }
    function count($arr) {
        $this->db->select('*');
        $this->db->from('post');
        foreach ($arr['where'] as $key => $value) {
            $this->db->where($key, $value);
        }
        if (isset($arr['like'])) {
            foreach ($arr['like'] as $key => $value) {
                $this->db->like($key, $value[0], $value[1]); 
                
            }
        }
        
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function track_visitor($data)
    {
        $this->db->trans_start();
        $this->db->insert('track_visitor', $data);
        $id = $this->db->insert_id();
        $this->db->trans_complete();
        return $id;
    }
    
    function count_visitor($post_id)
    {
        $this->db->select('*');
        $this->db->from('track_visitor');
        $this->db->where('post_id', $post_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
}