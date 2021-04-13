<?php
namespace tugas7_M3119064;

class NFaktorial {
    private $n;

    public function __construct(int $n)
    {
        $this->faktorial($n);
    }

    private function faktorial(int $n): void
    {
        $this->n = $n;
        $total_faktorial = 1;
        for ($i = $this->n; $i > 1; $i--):
            $total_faktorial *= $i;
        endfor;
        echo "Hasil dari $this->n! adalah $total_faktorial<br>";
    }
}
?>