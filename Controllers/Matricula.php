<?php

namespace App\Controllers;

use App\Models\Estudiante;


class Matricula
{
    private $idMatricula;
    private $cargaacademica;
    private $estudiante;
    
    public function __construct($idMatricula)
    {
        $this->idMatricula = $idMatricula;
        $this->cargaacademica = [];
        $this->alumno = [];
    }

    public function getCargaAcademica(CargaAcademica $cargaacademica)
    {
        $this->cargaacademica[] = $cargaacademica;
    }

    public function getEstudiante(Estudiante $estudiante)
    {
        $this->estudiante[] = $estudiante;
    }


    public function listarEstudiante()
    {
        return $this->estudiante;
    }

    public function listarCargaAcademica()
    {
        return $this->cargaacademica;
    }

    public function getIdMatricula() {
        return $this->idMatricula;
    }

}