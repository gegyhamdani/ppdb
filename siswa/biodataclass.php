<?php
	class biodataclass{

		//---Attribute Class--//
		private $id_pendaftar;
		private $nisn;
		private $nama;
		private $jeniskel;
		private $tempat_lahir;
		private $tanggal_lahir;
		private $agama;
		private $alamat;
		private $anak_ke;
		private $jumlah_saudara;
		private $no_hp;
		private $nama_ayah;
		private $pndkk_ayah;
		private $pkrjn_ayah;
		private $pnghsln_ayah;
		private $nama_ibu;
		private $pndkk_ibu;
		private $pkrjn_ibu;
		private $pnghsln_ibu;
		private $no_hportu;
		private $nama_wali;
		private $pkrjn_wali;
		private $alamat_wali;
		//---Attribute Class--//
		
		//----Method Class----//
		public function setBiodata(
			 $id_pendaftar,
			 $nisn,
			 $nama,
			 $jeniskel,
			 $tempat_lahir,
			 $tanggal_lahir,
			 $agama,
			 $alamat,
			 $anak_ke,
			 $jumlah_saudara,
			 $no_hp,
			 $nama_ayah,
			 $pndkk_ayah,
			 $pkrjn_ayah,
			 $pnghsln_ayah,
			 $nama_ibu,
			 $pndkk_ibu,
			 $pkrjn_ibu,
			 $pnghsln_ibu,
			 $no_hportu,
			 $nama_wali,
			 $pkrjn_wali,
			 $alamat_wali){
			$this->id_pendaftar = $id_pendaftar;
			$this->nisn = $nisn;
			$this->nama = $nama;
			$this->jeniskel = $jeniskel;
			$this->tempat_lahir = $tempat_lahir;
			$this->tanggal_lahir = $tanggal_lahir;
			$this->agama = $agama;
			$this->alamat = $alamat;
			$this->anak_ke = $anak_ke;
			$this->jumlah_saudara = $jumlah_saudara;
			$this->no_hp = $no_hp;
			$this->nama_ayah = $nama_ayah;
			$this->pndkk_ayah = $pndkk_ayah;
			$this->pkrjn_ayah = $pkrjn_ayah;
			$this->pnghsln_ayah = $pnghsln_ayah;
			$this->nama_ibu = $nama_ibu;
			$this->pndkk_ibu = $pndkk_ibu;
			$this->pkrjn_ibu = $pkrjn_ibu;
			$this->pnghsln_ibu = $pnghsln_ibu;
			$this->no_hportu = $no_hportu;
			$this->nama_wali = $nama_wali;
			$this->pkrjn_wali = $pkrjn_wali;
			$this->alamat_wali = $alamat_wali;
		}
		public function getIdpendaftar(){
			return $this->id_pendaftar;
		}
		public function getNisn(){
			return $this->nisn;
		}
		public function getNama(){
			return $this->nama;
		}
		public function getJeniskel(){
			return $this->jeniskel;
		}
		public function getTempat(){
			return $this->tempat_lahir;
		}
		public function getTanggal(){
			return $this->tanggal_lahir;
		}
		public function getAlamat(){
			return $this->alamat;
		}
		public function getAnak(){
			return $this->anak_ke;
		}
		public function getJumlah(){
			return $this->jumlah_saudara;
		}
		public function getNo(){
			return $this->no_hp;
		}
		public function getNamaayah(){
			return $this->nama_ayah;
		}
		public function getPendidikanAyah(){
			return $this->pndkk_ayah;
		}
		public function getPekerjaanAyah(){
			return $this->pkrjn_ayah;
		}
		public function getPenghasilanAyah(){
			return $this->pnghsln_ayah;
		}
		public function getNamaIbu(){
			return $this->nama_ibu;
		}
		public function getPendidikanIbu(){
			return $this->pndkk_ibu;
		}
		public function getPekerjaanIbu(){
			return $this->pkrjn_ibu;
		}
		public function getPenghasilanIbu(){
			return $this->pnghsln_ibu;
		}
		public function getNoortu(){
			return $this->no_hportu;
		}
		public function getNamawali(){
			return $this->nama_wali;
		}
		public function getPekerjaanWali(){
			return $this->pkrjn_wali;
		}
		public function getAlamatwali(){
			return $this->alamat_wali;
		}
		//public function getFoto(){
		//	return $this->foto;
		//}
		//----Method Class----//
		
		//-----SQL METHOD-----//


		public function save(){
			$sql = "INSERT INTO `biodata` 
					VALUES ( 
						'{$this->id_pendaftar}', 
						'{$this->nisn}', 
						'{$this->nama}',
						'{$this->jeniskel}',
						'{$this->tempat_lahir}', 
						'{$this->tanggal_lahir}', 
						'{$this->agama}',
						'{$this->alamat}', 
						'{$this->anak_ke}', 
						'{$this->jumlah_saudara}',
						'{$this->no_hp}', 
						'{$this->nama_ayah}',
						'{$this->pndkk_ayah}', 
						'{$this->pkrjn_ayah}', 
						'{$this->pnghsln_ayah}',
						'{$this->nama_ibu}', 
						'{$this->pndkk_ibu}', 
						'{$this->pkrjn_ibu}',
						'{$this->pnghsln_ibu}', 
						'{$this->no_hportu}',
						'{$this->nama_wali}',
						'{$this->pkrjn_wali}',
						'{$this->alamat_wali}')"; 
						//'{$this->foto}')";
			return $sql;
		}

		public function update(){
			$sql = "UPDATE `biodata` SET
					`nisn`='{$this->nisn}',
					`nama`='{$this->nama}',
					`jeniskel`='{$this->jeniskel}', 
					`tempat_lahir`='{$this->tempat_lahir},'
					`tanggal_lahir`='{$this->tanggal_lahir}',
					`agama`='{$this->agama}',
					`alamat`='{$this->alamat}',
					`anak_ke`='{$this->anak_ke}',
					`jumlah_saudara`='{$this->jumlah_saudara}',
					`no_hp`='{$this->no_hp}',
					`nama_ayah`='{$this->nama_ayah}',
					`pndkk_ayah`='{$this->pndkk_ayah}',
					`pkrjn_ayah`='{$this->pkrjn_ayah}',
					`pnghsln_ayah`='{$this->pnghsln_ayah}',
					`nama_ibu`='{$this->nama_ibu}',
					`pndkk_ibu`='{$this->pndkk_ibu}',
					`pkrjn_ibu`='{$this->pkrjn_ibu}',
					`pnghsln_ibu`='{$this->pnghsln_ibu}',
					`no_hportu`='{$this->no_hportu}'
					WHERE `id_pendaftar` = '{$this->id_pendaftar}'";
			return $sql;
		}
		//-----SQL METHOD-----//
	}
?>
