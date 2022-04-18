<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ads_model extends CI_Model {
    public function __construct() {
    }
    function add($data) {
        $this->db->trans_start();
        $this->db->insert('ads', $data);
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
        $result = $this->db->update('ads', $data);
        $this->db->trans_complete();
        return $result;
    }
    function get($arr = array()) {
        $this->db->select('*');
        $this->db->from('ads');
        if (isset($arr['where'])) {
            foreach ($arr['where'] as $key => $value) {
                $this->db->where($key, $value);
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
    function get_for_display($arr = array()) {
        $this->db->select('*');
        $this->db->from('ads');
        if (isset($arr['where'])) {
            foreach ($arr['where'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $this->db->where('till_date >= ', date('Y-m-d'));
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
        $this->db->from('ads');
        foreach ($arr['where'] as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
}
