<?php

namespace App\Models;

class Horario
{
    private $idHorario;
    private $horaInicio;
    private $horaFin;
    private $tipoHorario;

    public function __construct($idHorario, $horaInicio, $horaFin,$tipoHorario)
    {
        $this->idHorario = $idHorario;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->tipoHorario = $tipoHorario;
    }

    public function getIdHorario() {
        return $this->idHorario;
    }

    public function geHoraInicio() {
        return $this->horaInicio;
    }

    public function getHoraFin() {
        return $this->horaFin;
    }

    public function getTipoHorario() {
        return $this->tipoHorario;
    }

}