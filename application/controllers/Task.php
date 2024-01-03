<?php
class Task extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('task_model');
    }

    public function index() {
        $this->load->view('task/index');
    }

    public function daftar_tugas() {
        $data['tasks'] = $this->task_model->get_tasks();
        $this->load->view('task/daftar_tugas', $data);
    }

    public function add() {
        // Proses data form tambah tugas
        $data = array(
            'task_name' => $this->input->post('task_name'),
            'description' => $this->input->post('task_description'),
            'due_time' => $this->input->post('task_due_time')
        );
    
        $task_id = $this->task_model->add_task($data);
    
        // Redirect ke halaman daftar tugas setelah menambahkan
        redirect('task/daftar_tugas');
    }

    public function edit_tugas($task_id) {
        // Ambil data tugas berdasarkan ID
        $data['task'] = $this->task_model->get_task_by_id($task_id);

        // Tampilkan view untuk mengedit tugas
        $this->load->view('task/edit_tugas', $data);
    }

    public function update($task_id) {
        // Proses data form edit tugas
        $data = array(
            'task_name' => $this->input->post('task_name'),
            'description' => $this->input->post('task_description'),
            'due_time' => $this->input->post('task_due_time')
        );

        // Update data tugas berdasarkan ID
        $this->task_model->update_task($task_id, $data);

        // Redirect ke halaman daftar tugas setelah mengupdate
        redirect('task/daftar_tugas');
    }
    public function delete($task_id) {
        // Panggil model untuk menghapus tugas berdasarkan ID
        $this->task_model->delete_task($task_id);
    
        // Redirect kembali ke daftar tugas setelah menghapus
        redirect('task/daftar_tugas');
    }
    public function complete($task_id) {
        // Update status tugas menjadi "completed"
        $data = array('status' => 'completed');
        $this->task_model->update_task($task_id, $data);
    
        // Redirect ke halaman daftar tugas setelah menyelesaikan
        redirect('task/daftar_tugas');
    }
}
