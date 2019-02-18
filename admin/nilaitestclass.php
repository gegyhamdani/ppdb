<?php
class nilaitestclass{

		//---Attribute Class--//
	private $id_pendaftar;
	private $indo_ujian;
	private $mtk_ujian;
	private $inggris_ujian;
	private $ipa_ujian;
	private $rata;
		//---Attribute Class--//

		//----Method Class----//
	public function setNilaitest(
		$id_pendaftar,
		$indo_ujian,
		$mtk_ujian,
		$inggris_ujian,
		$ipa_ujian){
		$this->id_pendaftar = $id_pendaftar;
		$this->indo_ujian = $indo_ujian;
		$this->mtk_ujian = $mtk_ujian;
		$this->inggris_ujian = $inggris_ujian;
		$this->ipa_ujian = $ipa_ujian;
	}
	public function getIdpendaftar(){
		return $this->id_pendaftar;
	}
	public function getIndoujian(){
		return $this->indo_ujian;
	}
	public function getMtkujian(){
		return $this->mtk_ujian;
	}
	public function getInggrisujian(){
		return $this->inggris_ujian;
	}
	public function getIpaujian(){
		return $this->ipa_ujian;
	}
	public function setRata(){
		$this->rata = ($this->indo_ujian + $this->mtk_ujian + $this->inggris_ujian + $this->ipa_ujian) / 4;
	}
		//----Method Class----//

		//-----SQL METHOD-----//
	public function save(){
		$sql = "INSERT INTO `ujian` 
		VALUES ( 
		'{$this->id_pendaftar}', 
		'{$this->indo_ujian}', 
		'{$this->mtk_ujian}',
		'{$this->ipa_ujian}', 
		'{$this->inggris_ujian}',
		'{$this->rata}')";
		return $sql;
	}

	public function status(){
		if($this->rata >= 60) {
			$status = "Diterima";
		} else {
			$status = "Ditolak";
		} 
		$ganti = "UPDATE `calon` SET 
		`status` = '$status' WHERE `id_pendaftar`='{$this->id_pendaftar}'";
		return $ganti;
	}

	public function sms(){
		$mydb = new mysqli('localhost','root','','pkl-ppdb');
		
		$nohp ="SELECT * FROM biodata WHERE `id_pendaftar`='{$this->id_pendaftar}'";
		$result4 = $mydb->query($nohp);
		$row4 = $result4->fetch_assoc();

		$hp = $row4['no_hp'];
		$nama = $row4['nama'];

		$sms = "Selamat Kepada" . " " . $nama . " " . ", Bahwa anda Diterima di SMAS Mathlaul Anwar. Untuk informasi daftar ulang silahkan buka website Kami.";

		$ca = "INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES ('{$hp}', '{$sms}');";
		return $ca;

		if($this->rata >= 60) {
			$status = "Diterima";
			$ca = "INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES ('{$hp}', '{$sms}');";
		return $ca;
		} else {
			$status = "Ditolak";
		} 
	}

		//-----SQL METHOD-----//
}
?>
