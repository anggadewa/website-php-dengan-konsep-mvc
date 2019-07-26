<?php 

class Mahasiswa_model{
	// menggunakan array sebagai datanya
	// private $mhs = [
	// 	[
	// 		"nama" => "Angga Dewantoro Kekasih",
	// 		"npm" => "50415764",
	// 		"kelas" => "4IA18"
	// 	],
	// 	[
	// 		"nama" => "Angga",
	// 		"npm" => "50000000",
	// 		"kelas" => "4IA18"
	// 	],
	// 	[
	// 		"nama" => "Dewa",
	// 		"npm" => "51111111",
	// 		"kelas" => "4IA18"
	// 	]
	// ];

	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}


	public function getAllMahasiswa(){
		// return $this->mhs;
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id){
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO mahasiswa VALUES ('', :nama, :npm, :kelas)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('npm', $data['npm']);
		$this->db->bind('kelas', $data['kelas']);

		$this->db->execute();

		return $this->db->rowCount();

	}

}

?>