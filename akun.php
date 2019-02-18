<?php
	class akun{

		//---Attribute Class--//
		private $username;
		private $email;
		private $password;
		private $hak;
		private $tgl_daftar;
		//---Attribute Class--//
		
		//----Method Class----//
		public function setAkun($username, $email, $password, $hak, $tgl_daftar){
			$this->username = $username;
			$this->email = $email;
			$this->password = $password;
			$this->hak = $hak;
			$this->tgl_daftar = $tgl_daftar;
		}
		public function getUsername(){
			return $this->username;
		}
		public function getemail(){
			return $this->email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getHak(){
			return $this->hak;
		}
		public function getTgldaftar(){
			return $this->tgl_daftar;
		}
		//----Method Class----//
		
		//-----SQL METHOD-----//
		public function save(){
			$sql = "INSERT INTO `users` 
					VALUES ( 
						'{$this->username}', 
						'{$this->email}', 
						MD5('{$this->password}'),
						'Siswa',
						'{$this->tgl_daftar}')";
			return $sql;
		}

		public function savecalon(){
			$ca = "INSERT INTO `calon` (`username`, `izasah`, `skhun`, `akte`, `kartu_keluarga`, `biaya`, `status`)
					VALUES (
						'{$this->username}', 
						'Belum Ada',
						'Belum Ada',
						'Belum Ada',
						'Belum Ada',
						null,
						'Belum Konfrimasi')";
			return $ca;
		}
		
		//-----SQL METHOD-----//
	}
?>
