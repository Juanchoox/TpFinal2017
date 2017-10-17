<?php

namespace TpFinal;

class Tarjeta {
    
    protected saldo = 0;

    public function saldo() {
        return $this->saldo;
    }

    public function cargarSaldo($s) {
        if($s<332) {
            $this->saldo = $this->saldo + $s;
        }
        else {
            if($s>=624) {
                $this->saldo = $this->saldo + $s + 152;
            }
            else {
                $this->saldo = $this->saldo + $s + 56;
        }
    }
}
