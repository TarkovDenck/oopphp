<?php
//  rekening bank
class Rekening {
    protected $norek;
    protected $saldo;

    public function __construct($norek, $saldo = 0) {
        $this->norek = $norek;
        $this->saldo = $saldo;
    }

    public function nabung($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Berhasil menabung Rp $jumlah. Saldo saat ini: Rp {$this->saldo}.<br>";
        } else {
            echo "Jumlah yang dimasukkan tidak valid untuk menabung.<br>";
        }
    }

    public function ceksaldo() {
        echo "Saldo saat ini adalah Rp {$this->saldo}.<br>";
        return $this->saldo;
    }

    public function tariktunai($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Berhasil menarik tunai Rp $jumlah. Saldo saat ini: Rp {$this->saldo}.<br>";
        } elseif ($jumlah > $this->saldo) {
            echo "Saldo tidak mencukupi untuk menarik tunai Rp $jumlah.<br>";
        } else {
            echo "Jumlah yang dimasukkan tidak valid untuk penarikan.<br>";
        }
    }
}

// Kelas turunan untuk rekening tabungan
class RekeningTabungan extends Rekening {
    public function __construct($norek, $saldo = 0) {
        parent::__construct($norek, $saldo);
    }
}

//  penggunaan
$rekening1 = new RekeningTabungan("123456789", 500000);
$rekening1->ceksaldo();
$rekening1->nabung(100000);
$rekening1->tariktunai(200000);
$rekening1->ceksaldo(); 

$rekening2 = new RekeningTabungan("123456789", 700000);
$rekening2->ceksaldo();
$rekening2->nabung(200000);
$rekening2->tariktunai(400000);
$rekening2->ceksaldo();
?>
