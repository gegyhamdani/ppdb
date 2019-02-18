<?php
	class asalclass{

		//---Attribute Class--//
		private $id_pendaftar;
		private $nama_sekolah;
		private $status_sekolah;
		private $alamat_sekolah;
		private $tahun_lulus;
		private $no_izasah;
		//---Attribute Class--//
		
		//----Method Class----//
		public function setIdpendaftar($id_pendaftar){
			$this->id_pendaftar = $id_pendaftar;
		}

		public function setAsal(
			 $nama_sekolah,
			 $status_sekolah,
			 $alamat_sekolah,
			 $tahun_lulus,
			 $no_izasah){
			$this->nama_sekolah = $nama_sekolah;
			$this->status_sekolah = $status_sekolah;
			$this->alamat_sekolah = $alamat_sekolah;
			$this->tahun_lulus = $tahun_lulus;
			$this->no_izasah = $no_izasah;
		}
		public function getIdpendaftar(){
			return $this->id_pendaftar;
		}
		public function getNamasekolah(){
			return $this->nama_sekolah;
		}
		public function getStatussekolah(){
			return $this->status_sekolah;
		}
		public function getAlamatsekolah(){
			return $this->alamat_sekolah;
		}
		public function getTahunlulus(){
			return $this->tahun_lulus;
		}
		public function getNoizasah(){
			return $this->no_izasah;
		}
		//----Method Class----//
		
		//-----SQL METHOD-----//
		public function save(){
			$sql = "INSERT INTO `sekolah_asal` 
					VALUES ( 
						'{$this->id_pendaftar}', 
						'{$this->nama_sekolah}', 
						'{$this->status_sekolah}',
						'{$this->alamat_sekolah}', 
						'{$this->tahun_lulus}', 
						'{$this->no_izasah}')";
			return $sql;
		}
		
		public function update(){
			$sql = "UPDATE `sekolah_asal` SET 
					`nama_sekolah` = '{$this->nama_sekolah}', 
					`status_sekolah`='{$this->status_sekolah}',
					`alamat_sekolah`='{$this->alamat_sekolah}',
					`tahun_lulus`='{$this->tahun_lulus}',
					`no_izasah`='{$this->no_izasah}'
					WHERE `id_pendaftar`='{$this->id_pendaftar}'";
			return $sql;
		}
	}
?>
