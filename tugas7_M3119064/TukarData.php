<?php
namespace tugas7_M3119064;

class TukarData {
    private $a;
    private $b;

    public function __construct($a, int $b = 0)
    {
        if (is_array($a)) {
            $this->a = $a[0];
            $this->b = $b[1];
        } else {
            $this->a = $a;
            $this->b = $b;
        }
        echo "Angka awal, a = {$this->a}, b = {$this->b}<br>";
        $this->swap($this->a, $this->b);
        echo "Angka akhir, a = {$this->a}, b = {$this->b}<br>";
    }

    public function swap(int $a, int $b): void
    {
        $temp = $a;
        $this->a = $b;
        $this->b = $temp;
    }
}
?>