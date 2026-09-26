<?php
interface Identitas
{
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas
{
    private string $nim;
    private string $nama;
    protected float $ipk;

    public function __construct(string $nim, string $nama, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk > 4) {
            throw new InvalidArgumentException('IPK harus 2 sampai 4.'); //ubah ipk yang awalnya ipk harus 0 dan 4 menjadi batasnya 4 saja
        }
        elseif ($ipk >=2){ //set ipk yang normal
            echo "ipk valid <br>";
        }
        elseif ($ipk <2){ //set ipk artefak kampus
            echo "lalu kapan saya akan di wisuda <br>";
        }
        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    public function ringkasan(): string
    {
        return $this->nim . ' - ' . $this->nama . ' - IPK: ' . $this->ipk;
    }
}

$mhs = new Mahasiswa('4524210016', 'Aryan Faathir Asq Gunawan', 3.9);
echo $mhs->ringkasan();

?>