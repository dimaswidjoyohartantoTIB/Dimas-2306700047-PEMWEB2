<?php

// Class Induk
class SivitasAkademik {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen (turunan)
class Dosen extends SivitasAkademik {
    protected $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

// Class Mahasiswa (turunan)
class Mahasiswa extends SivitasAkademik {
    protected $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

// ======================
// TEST / OUTPUT
// ======================

$dosen = new Dosen("Pak Budi", "123456");
$mahasiswa = new Mahasiswa("Andi", "2306700047");

echo "Dosen: " . $dosen->getNama() . " - NIDN: " . $dosen->getNidn();
echo "<br>";
echo "Mahasiswa: " . $mahasiswa->getNama() . " - NIM: " . $mahasiswa->getNim();

?>