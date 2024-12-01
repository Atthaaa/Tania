<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class ChatModel extends CI_Model {
                        
public function getPesan($id_admin,$id_pengguna)
{
	$this->db->from('pesan');
	$this->db->where('id_admin= '.$id_admin.' 
	and id_pengguna='.$id_pengguna .' 
	or id_admin= ' . $id_pengguna . ' 
	and id_pengguna=' . $id_admin);

	$r = $this->db->get();
	
	return $r->result();
	
	# code...
}
public function TambahChatKeSatu($in)
{
	$this->db->insert('pesan', $in);
		
	# code...
}
public function getData($u,$p)
{
	$this->db->from('admin');	
	$this->db->where('username', $u);
		$this->db->where('password', $p);
	return $sql = $this->db->get()->row();
	# code...
}
	public function getDataOnly($u)
	{
		$this->db->from('admin');
		$this->db->where('username', $u);
		return $sql = $this->db->get()->row();
		# code...
	}
	public function getDataById($no)
	{
		$this->db->from('admin');
		$this->db->where('id_admin', $no);
		return $sql = $this->db->get()->row();
		# code...
	}
	public function GetAllOrangKecUser($id_admin)
	{

		$this->db->from('admin');
		$this->db->where('id_admin!=', $id_admin);
		return $sql = $this->db->get()->result();
		# code...
	}
	public function Tambah($tabel,$in)
	{
		$this->db->insert($tabel, $in);
	}
                        
                            
                        
}
                        
/* End of file ChatModel.php */
    
                        