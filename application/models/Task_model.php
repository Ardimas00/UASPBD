<?php
class Task_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_tasks() {
        $query = $this->db->get('task_manager');
        return $query->result();
    }

    public function add_task($data) {
        $data['status'] = 'ongoing';
        $this->db->insert('task_manager', $data);
        return $this->db->insert_id();
    }

    public function get_task_by_id($task_id) {
        $this->db->where('task_id', $task_id);
        $query = $this->db->get('task_manager');
        return $query->row();
    }

    public function update_task($task_id, $data) {
        $this->db->where('task_id', $task_id);
        $this->db->update('task_manager', $data);
    }

    public function delete_task($task_id) {
        $this->db->where('task_id', $task_id);
        $this->db->delete('task_manager');
    }

    public function create_tasks_table() {
        $this->db->query("");
    }
}
