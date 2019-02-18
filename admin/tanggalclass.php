<?php
	class tanggal{

		//---Attribute Class--//
		private $no;
		private $namatanggal;
		private $tanggal;
		private $tanggalsms;
		//---Attribute Class--//
		
		//----Method Class----//
		public function setNo($no){
			$this->no = $no;
		}
		public function getNo(){
			return $this->no;
		}
		public function setNamatanggal($namatanggal){
			$this->namatanggal = $namatanggal;
		}
		public function getNamatanggal(){
			return $this->tanggal;
		}
		public function setTanggal($tanggal){
			$this->tanggal = $tanggal;
		}
		public function getTanggal(){
			return $this->tanggal;
		//----Method Class----//
		}public function setTanggalsms($tanggalsms){
			$this->tanggalsms = $tanggalsms;
		}
		public function getTanggalsms(){
			return $this->tanggalsms;
		}
		
		//-----SQL METHOD-----//
		public function save(){
			$sql = "INSERT INTO `tanggal` (`nama_tanggal`, `tanggal`, `tanggal_sms`) 
					VALUES ( 
						'{$this->namatanggal}', 
						'{$this->tanggal}', 
						'{$this->tanggalsms}')"	;
			return $sql;
		}
		
		public function update(){
			$sql = "UPDATE `tanggal` SET  
					`nama_tanggal`='{$this->namatanggal}', 
					`tanggal`='{$this->tanggal}',
					`tanggal_sms`='{$this->tanggalsms}'
					WHERE `no`='{$this->no}'";
			return $sql;
		}
		
		public function delete(){
			$sql = "DELETE FROM `tanggal` WHERE `no` ='{$this->no}'";
			return $sql;
		}
		//-----SQL METHOD-----//
	}
?>
