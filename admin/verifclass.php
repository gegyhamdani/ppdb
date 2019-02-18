<?php
class verifclass{

		//---Attribute Class--//
	private $id_pendaftar;
	private $username;
	private $izasah;
	private $skhun;
	private $akte;
	private $kartu_keluarga;
	private $biaya;
	private $status;
		//---Attribute Class--//

		//----Method Class----//
	public function setVerif(
		$id_pendaftar,
		$username,
		$izasah,
		$skhun,
		$akte,
		$kartu_keluarga,
		$biaya,
		$status){
		$this->id_pendaftar = $id_pendaftar;
		$this->username = $username;
		$this->izasah = $izasah;
		$this->skhun = $skhun;
		$this->akte = $akte;
		$this->kartu_keluarga = $kartu_keluarga;
		$this->biaya = $biaya;
		$this->status = $status;
	}
	public function getIdpendaftar(){
		return $this->id_pendaftar;
	}
	public function getNisn(){
		return $this->nisn;
	}
	public function getIzasah(){
		return $this->izasah;
	}
	public function getSkhun(){
		return $this->skhun;
	}
	public function getAkte(){
		return $this->akte;
	}
	public function getKartukeluarga(){
		return $this->kartukeluarga;
	}
	public function getBiaya(){
		return $this->biaya;
	}
	public function getStatus(){
		return $this->status;
	}
		//----Method Class----//

		//-----SQL METHOD-----//

	public function update(){
		$sql = "UPDATE `calon` SET
		`izasah` = '{$this->izasah}',
		`skhun` = '{$this->skhun}',
		`akte` = '{$this->akte}',
		`kartu_keluarga` = '{$this->kartu_keluarga}',
		`biaya` = '{$this->biaya}',
		`status` = 'Verifikasi'
		WHERE `id_pendaftar`='{$this->id_pendaftar}'";
		return $sql;
	}

	public function tanggal(){
		$mydb = new mysqli('localhost','root','','pkl-ppdb');
		$tanggal ="SELECT * FROM tanggal WHERE nama_tanggal = 'Tanggal Test'";
		$result3 = $mydb->query($tanggal);
		$row3 = $result3->fetch_assoc();

		$nohp ="SELECT * FROM biodata WHERE `id_pendaftar`='{$this->id_pendaftar}'";
		$result4 = $mydb->query($nohp);
		$row4 = $result4->fetch_assoc();

		$tvertif = $row3['tanggal'];
		$tsms = $row3['tanggal_sms'];
		$hp = $row4['no_hp'];
		$nama = $row4['nama'];

		$sms = "Diberitahukan Kepada" . " " . $nama . " " . ", Bahwa tanggal" . " " . $tvertif . " " . ", akan dilakukan Test Penerimaan Peserta Didik Baru di SMAS Mathlaul Anwar.";

		$ca = "INSERT INTO outbox (DestinationNumber, TextDecoded, SendingDateTime) VALUES ('{$hp}', '{$sms}', '{$tsms}');";
		return $ca;
	}
		//-----SQL METHOD-----//
}
?>
