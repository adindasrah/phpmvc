<?php 

class Mahasiswa_model{
	private $mhs = [
		[
			"nama" => "Adinda Sarah",
			"nrp"  => "173040048",
			"email"=> "adindasarah.asam@mail.unpas.ac.id",
			"jurusan"=> "Teknik Informatika"

		],

		[
			"nama" => "Evi Silvia Andriani",
			"nrp"  => "173040050",
			"email"=> "evisilvia@mail.unpas.ac.id",
			"jurusan"=> "Teknik Informatika"

		],

		[
			"nama" => "Amanda Shakila",
			"nrp"  => "173040070",
			"email"=> "amandashakila@mail.unpas.ac.id",
			"jurusan"=> "Teknik Informatika"

		]
	];

	public function getAllMahasiswa(){
		return $this->mhs;
	}
}