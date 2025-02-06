<?php

namespace App;

class DNI
{
    private string $numero;
    private string $letra;

    public function __construct(string $dni)
    {
        $this->numero = substr($dni, 0, 8);
        $this->letra = strtoupper(substr($dni, -1));
    }

    public function getDNIConLetra(): string
    {
        return $this->numero . $this->letra;
    }
} 