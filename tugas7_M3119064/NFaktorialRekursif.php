<?php
namespace tugas7_M3119064;

class NFaktorialRekursif {
    private $n;

   
    public function __construct(int $n)
    {
        $this->n = $n;
        echo "Hasil dari $n! rekursif adalah {$this->faktorial($this->n)}<br>";
    }
    
    private function faktorial(int $n): int
    {
        if ($n === 1) {
            $hasil = 1;
        } else {
            $hasil = $n * $this->faktorial($n - 1);
        }
        return $hasil;
    }
}
?>
