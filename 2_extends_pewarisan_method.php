<?php
class Mahasiswa {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function getNama(): string {
        return $this->nama;
    }
}

class MahasiswaReguler extends Mahasiswa {
    public function jenis(): string {
        return 'Reguler';
    }
}

$m = new MahasiswaReguler('Andi');
echo $m->getNama() . ' - ' . $m->jenis(); 