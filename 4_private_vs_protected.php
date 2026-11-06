<?php

class Mahasiswa
{
	private string $nim = '23001';
	protected string $kategori = 'Mahasiswa';

	public function getNim(): string
	{
		return $this->nim;
	}
}

class MahasiswaReguler extends Mahasiswa
{
	public function info(): string
	{
		// $nim is private to Mahasiswa, so access it through getNim().
		return $this->getNim() . ' / ' . $this->kategori;
	}
}

echo (new MahasiswaReguler())->info();
