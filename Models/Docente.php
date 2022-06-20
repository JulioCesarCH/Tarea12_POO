<?php

namespace App\Models;

class Docente
{
    private $dniDoc;
    private $nombres;
    private $apellidos;

    public function __construct($dniDoc, $nombres, $apellidos)
    {
        $this->dniDoc = $dniDoc;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function getDniDoc() {
        return $this->dniDoc;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }
}