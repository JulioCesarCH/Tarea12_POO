<?php

namespace App\Models;

class Periodo
{
    private $idPeriodo;
    private $nPeriodo;

    public function __construct($idPeriodo, $nPeriodo)
    {
        $this->idPeriodo = $idPeriodo;
        $this->nPeriodo = $nPeriodo;
    }

    public function getIdPeriodo() {
        return $this->idPeriodo;
    }

    public function getNPeriodo() {
        return $this->nPeriodo;
    }

}