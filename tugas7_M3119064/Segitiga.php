<?php
namespace tugas7_M3119064;

class Segitiga {
    private $a;
    private $b;
    private $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        if ($this->samasisi()) {
            echo "Segitiga sama sisi<br>";
            return;
        }
        if ($this->samakaki()) {
            echo "Segitiga sama kaki<br>";
            return;
        }
        if ($this->sikusiku()) {
            echo "Segitiga siku-siku<br>";
            return;
        }
        if ($this->sembarang()) {
            echo "Segitiga sembarang<br>";
            return;
        }
        echo "Bukan segitiga<br>";
    }

    private function samakaki(): bool
    {
        if ($this->a === $this->b && $this->b !== $this->c):
            return $this->c >= 0 && $this->c <= $this->a * 2;
        elseif ($this->b === $this->c && $this->c !== $this->a):
            return $this->a >= 0 && $this->a <= $this->b * 2;
        elseif ($this->c === $this->a && $this->a !== $this-> b):
            return $this->b >= 0 && $this->b <= $this->c * 2;
        endif;
        return false;
    }

    private function samasisi(): bool
    {
        return $this->a === $this->b && $this->a === $this->c;
    }

    private function sikusiku(): bool
    {
        if ($this->a < $this->b && $this->b < $this->c):
            return $this->a ** 2 + $this->b ** 2 === $this->c ** 2;
        elseif ($this->b < $this->c && $this->c < $this->a):
            return $this->b ** 2 + $this->c ** 2 === $this->a ** 2;
        elseif ($this->c < $this->a && $this->a < $this->b):
            return $this->c ** 2 + $this->a ** 2 === $this->b ** 2;
        endif;
        return false;
    }

    private function sembarang(): bool
    {
        return $this->a !== $this->b && $this->b !== $this->c;
    }
}
?>