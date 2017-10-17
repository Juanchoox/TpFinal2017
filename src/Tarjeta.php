<?php

namespace TpFinal;

class Tarjeta {
    
    protected saldo = 0;

    public function saldo() {
        return $this->saldo;
    }

    public function cargarSaldo($s) {
        if($s==332) {
            $this->saldo = $this->saldo + 388;
        }
        else {
            if($s==624) {
                $this->saldo = $this->saldo + 776;
            }
            else {
                $this->saldo = $this->saldo + $s;
            }
        }
    }


}

class Transporte {
    protected $tipoVehiculo;
    protected $patente;
    public function __construct($a, $b) {
        $this->tipoVehiculo = $a;
        $this->patente = $b;
    }
}
