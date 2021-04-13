<?php
namespace tugas7_M3119064;

class KonversiUang {
    private $data;
    private $hasil;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->konversi($this->data);
        $this->loop($this->hasil);
    }

    public function konversi(array $data): array
    {
        $i = 0;
        foreach ($data as $datum) {
            $this->hasil[$i] = $datum * 15000;
            $i++;
        }
        return $this->hasil;
    }

    public function loop(array $hasil): void
    {
        $i = 1;
        foreach ($hasil as $item) {
            echo "Konversi ke-$i = Rp.". number_format($item) . "<br>";
            $i++;
        }
    }
}
?>
