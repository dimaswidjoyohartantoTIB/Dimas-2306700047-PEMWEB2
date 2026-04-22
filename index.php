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

// Class Dosen
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

// Class Mahasiswa
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
// INSTANSIASI OBJECT
// ======================

$dosen = new Dosen("Dimas", "123456");
$mahasiswa = new Mahasiswa("Dimas", "2306700047");

// ======================
// OUTPUT (WAJIB echo)
// ======================

echo "Data Dosen:<br>";
echo "Nama: " . $dosen->getNama() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br><br>";

echo "Data Mahasiswa:<br>";
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim();

?>