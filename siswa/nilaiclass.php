<?php
	class nilaiclass{

		//---Attribute Class--//
		private $id_pendaftar;
		private $indo;
		private $mtk;
		private $inggris;
		private $ipa;
		//---Attribute Class--//
		
		//----Method Class----//
		public function setNilai(
			 $id_pendaftar,
			 $indo,
			 $mtk,
			 $inggris,
			 $ipa,
			 $peminatan){
			$this->id_pendaftar = $id_pendaftar;
			$this->indo = $indo;
			$this->mtk = $mtk;
			$this->inggris = $inggris;
			$this->ipa = $ipa;
		}
		public function getIdpendaftar(){
			return $this->id_pendaftar;
		}
		public function getIndo(){
			return $this->indo;
		}
		public function getMtk(){
			return $this->mtk;
		}
		public function getInggris(){
			return $this->inggris;
		}
		public function getIpa(){
			return $this->ipa;
		}
		//----Method Class----//
		
		//-----SQL METHOD-----//
		public function save(){
			$sql = "INSERT INTO `nilai` 
					VALUES ( 
						'{$this->id_pendaftar}', 
						'{$this->indo}', 
						'{$this->mtk}',
						'{$this->inggris}', 
						'{$this->ipa}')";
			return $sql;
		}
		//-----SQL METHOD-----//
	}
?>
