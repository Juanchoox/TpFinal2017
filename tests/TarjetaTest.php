<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    /**
     * Comprueba que el saldo de una tarjeta nueva sea cero.
     */
    public function testSaldoCero() {
        $tarjeta = new Tarjeta;
        $this->assertEquals($tarjeta->saldo(), 0);
        $tarjeta->cargarSaldo(50);
        $this->assertEquals($tarjeta->saldo(), 50);
    }
}
