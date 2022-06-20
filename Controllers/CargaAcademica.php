<?php

namespace App\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Horario;
use App\Models\Periodo;

class CargaAcademica
{
    private $idCarga;
    private $curso;
    private $docente;
    private $horario;
    private $periodo;

    public function __construct($idCarga)
    {
        $this->idCarga = $idCarga;
        $this->curso = [];
        $this->docente = [];
        $this->horario = [];
        $this->periodo = [];
    }

    public function getCurso(Curso $curso)
    {
        $this->curso[] = $curso;
    }

    public function getDocente(Docente $docente)
    {
        $this->docente[] = $docente;
    }

    public function getHorario(Horario $horario)
    {
        $this->horario[] = $horario;
    }

    public function getPeriodo(Periodo $periodo)
    {
        $this->periodo[] = $periodo;
    }

    public function listarCurso()
    {
        return $this->curso;
    }

    public function listarDocente()
    {
        return $this->docente;
    }

    public function listarHorario()
    {
        return $this->horario;
    }

    public function listarPeriodo()
    {
        return $this->periodo;
    }

    public function getIdCarga() {
        return $this->idCarga;
    }
}