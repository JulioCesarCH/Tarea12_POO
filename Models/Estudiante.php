<?php

namespace App\Models;

class Estudiante
{
    private $idEstudiante;
    private $nombres;
    private $apellidos;

    public function __construct($idEstudiante, $nombres, $apellidos)
    {
        $this->idEstudiante = $idEstudiante;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function getIdEstudiante() {
        return $this->idEstudiante;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }
}