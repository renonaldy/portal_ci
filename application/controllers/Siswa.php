<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
    }
    function index(){
        $data['anggota'] = $this->siswa_model->get_siswa();
        $this->load->view('siswa_view',$data);
}
function add_new(){
    $this->load->view('tambah_siswa_view');
    }
    function save(){
    $user_id = $this->input->post('user_id');
    $Nama = $this->input->post('Nama');
    $Password = $this->input->post('Password');
    $Email = $this->input->post('Email');
    $Kelas = $this->input->post('Kelas');
    $Tanggal_lahir = $this->input->post('Tanggal_lahir');
    $Alasan = $this->input->post('Alasan');
    $Hobi = $this->input->post('Hobi');
    $Agama = $this->input->post('Agama');
    $this->siswa_model->save($user_id,$Nama,$Password,$Email,$Kelas,$Tanggal_lahir,$Alasan,$Hobi,$Agama);
    redirect('siswa');
    }
    function delete(){
        $user_id = $this->uri->segment(3,0);
        $this->siswa_model->delete($user_id);
        redirect('siswa');
        }
    function get_edit(){
            $user_id = $this->uri->segment(3);
            $result = $this->siswa_model->get_user_id($user_id);
            if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
            'user_id' => $i['user_id'],
            'Nama' => $i['Nama'],
            'Password' => $i['Password'],
            'Email' => $i['Email'],
            'Kelas' => $i['Kelas'],
            'Tanggal_lahir' => $i['Tanggal_lahir'],
            'Alasan' => $i['Alasan'],
            'Hobi' => $i['Hobi'],
            'Agama' => $i['Agama']
            );
            $this->load->view('edit_siswa_view',$data);
            }else{
            echo "Data Tidak Ditemukan";
            }
            }
            function update(){
                $user_id = $this->input->post('user_id');
                $Nama = $this->input->post('Nama');
                $Password = $this->input->post('Password');
                $Email = $this->input->post('Email');
                $Kelas = $this->input->post('Kelas');
                $Tanggal_lahir = $this->input->post('Tanggal_lahir');
                $Alasan = $this->input->post('Alasan');
                $Hobi = $this->input->post('Hobi');
                $Agama = $this->input->post('Agama');
                $this->siswa_model->update($user_id,$Nama,$Password,$Email,$Kelas,$Tanggal_lahir,$Alasan,$Hobi,$Agama);
                redirect('siswa');
                }
}
