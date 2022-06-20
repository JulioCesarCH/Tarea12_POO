<?php

namespace App\Models;

class Curso
{
    private $idCurso;
    private $nCurso;

    public function __construct($idCurso, $nCurso)
    {
        $this->idCurso = $idCurso;
        $this->nCurso = $nCurso;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function getNCurso() {
        return $this->nCurso;
    }

}