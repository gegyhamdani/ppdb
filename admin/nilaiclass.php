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
		public function setIdpendaftar($id_pendaftar){
			$this->id_pendaftar = $id_pendaftar;
		}


		public function setNilai(
			 $indo,
			 $mtk,
			 $inggris,
			 $ipa,
			 $peminatan){
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

		public function update(){
			$sql = "UPDATE `nilai` SET 
					`indo` = '{$this->indo}', 
					`mtk`='{$this->mtk}',
					`inggris`='{$this->inggris}',
					`ipa`='{$this->ipa}'
					WHERE `id_pendaftar`='{$this->id_pendaftar}'";
			return $sql;
		}
		//-----SQL METHOD-----//
	}
?>
