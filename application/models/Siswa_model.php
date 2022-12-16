<?php
class Siswa_model extends CI_Model{

    
    function save($user_id,$Nama,$Password,$Email,$Kelas,$Tanggal_lahir,$Alasan,$Hobi,$Agama){
        $data = array('user_id' => $user_id,'Nama' => $Nama,'Password' => $Password,'Email' => $Email,'Kelas' => $Kelas,'Tanggal_lahir' => $Tanggal_lahir,'Alasan' => $Alasan,'Hobi' => $Hobi,'Agama' => $Agama);
        $this->db->get('anggota',$data);
        }
        function delete($user_id){
            $this->db->where('user_id', $user_id);
            $this->db->delete('anggota');
            }
        function get_user_id($user_id){
                $query = $this->db->get_where('anggota',
                array('user_id' => $user_id));
                return $query;
                }
                function update($user_id,$Nama,$Password,$Email,$Kelas,$Tanggal_lahir,$Alasan,$Hobi,$Agama){
                $data = array(
                'user_id' => $user_id,   
                'Nama' => $Nama,
                'Password' => $Password,
                'Email' => $Email,
                'Kelas' => $Kelas,
                'Tanggal_lahir' => $Tanggal_lahir,
                'Alasan' => $Alasan,
                'Hobi' => $Hobi,
                'Agama' => $Agama);
                $this->db->where('user_id', $user_id);
                $this->db->update('anggota', $data);
                }
function get_siswa(){
$result = $this->db->get('anggota');
return $result;
}
}
