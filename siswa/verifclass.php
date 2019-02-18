<?php
class verifclass{

		//---Attribute Class--//
	private $id_pendaftar;
	private $nisn;
	private $izasah;
	private $skhun;
	private $akte;
	private $kartu_keluarga;
	private $biaya;
	private $status;
	private $tg_daftar;

		//---Attribute Class--//

		//----Method Class----//
	public function setVerif(){
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
	public function getRapot(){
		return $this->rapot;
	}
	public function getStatus(){
		return $this->status;
	}
		//----Method Class----//

		//-----SQL METHOD-----//

	public function update($id_pendaftar){
		$sql = "UPDATE `calon` SET 
		`status` = 'Proses'
		WHERE `id_pendaftar`='{$id_pendaftar}'";
		return $sql;
	}

	public function tanggal($id_pendaftar){
		$mydb = new mysqli('localhost','root','','pkl-ppdb');
		$tanggal ="SELECT * FROM tanggal WHERE nama_tanggal = 'Verifikasi'";
		$result3 = $mydb->query($tanggal);
		$row3 = $result3->fetch_assoc();

		$nohp ="SELECT * FROM biodata WHERE `id_pendaftar`='{$id_pendaftar}'";
		$result4 = $mydb->query($nohp);
		$row4 = $result4->fetch_assoc();

		$tvertif = $row3['tanggal'];
		$tsms = $row3['tanggal_sms'];
		$hp = $row4['no_hp'];
		$nama = $row4['nama'];

		$sms = "Mengundang" . " " . $nama . " " . "ke SMA Mathlaul Anwar, untuk melakukan verikasi serta membawa lampiran pada" . " " . $tvertif . ". " . "mulai pukul 08:00";

		$ca = "INSERT INTO outbox (DestinationNumber, TextDecoded, SendingDateTime) VALUES ('{$hp}', '{$sms}', '{$tsms}');";
			return $ca;
	}
		//-----SQL METHOD-----//
}
?>
