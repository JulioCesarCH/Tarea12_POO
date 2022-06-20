<?php
require_once __DIR__.'/../vendor/autoload.php';
use App\Models\{Curso,Docente,Estudiante,Horario,Periodo};
use App\Controllers\{CargaAcademica,Matricula};
$ca2022I01=new CargaAcademica("2022I.01");
$ca2022I02=new CargaAcademica("2022I.02");
$ca2022I03=new CargaAcademica("2022I.03");

// registrar Periodos
$ca2022I01->getPeriodo(new Periodo(1,"2022-I"));
$ca2022I02->getPeriodo(new Periodo(2,"2022-II"));
$ca2022I03->getPeriodo(new Periodo(1,"2022-I"));

// registrar horarios
$ca2022I01->getHorario(new Horario("M","08:00 am","12:00 am","Manana"));
$ca2022I02->getHorario(new Horario("T","01:00 pm","06:00 pm","Tarde"));
$ca2022I03->getHorario(new Horario("M","08:00 am","12:00 am","Manana"));

// registrar cursos
$ca2022I01->getCurso(new Curso("POO", "Programacion Orientada a Objetos"));
$ca2022I02->getCurso(new Curso("PGII", "lenguaje de programacion II"));
$ca2022I03->getCurso(new Curso("ISW", "Ingenieria de Software"));
// registrar Docentes
$ca2022I01->getDocente(new Docente(12345678, "Edgardo", "Ramirez"));
$ca2022I02->getDocente(new Docente(87654321, "Alberto", "Salvador"));
$ca2022I03->getDocente(new Docente(12345678, "Edgardo", "Ramirez"));

//registrar matricula
 // alumno julio
 $Ma12022I01 = new Matricula("1.2022I.01");
 $Ma12022I01->getEstudiante(new Estudiante("1", "Julio", "Cueva"));
 $Ma12022I01->getCargaAcademica($ca2022I01);
// alumno beker
$Ma12022I02 = new Matricula("1.2022I.02");
$Ma12022I02->getEstudiante(new Estudiante("2", "Beker", "Hilario"));
$Ma12022I02->getCargaAcademica($ca2022I02);

echo "FICHA DE MATRICULA".'<br><br>';

echo "Codigo de Matricula: ". $Ma12022I01->getIdMatricula().'<br>';

foreach($Ma12022I01->listarEstudiante() as $estudiante)
    {
    echo "Estudiante: ". $estudiante->getNombres() . " " . $estudiante->getApellidos().'<br>';
    foreach($ca2022I01->listarPeriodo() as $periodo)
    {
    echo "Periodo: ". $periodo->getNPeriodo().'<br>';
    }
    foreach($ca2022I01->listarCurso() as $curso)
    {
    echo "Curso: ". $curso->getIdCurso() . " " . $curso->getNCurso().'<br>';
    }
    foreach($ca2022I01->listarDocente() as $docente)
    {
    echo "Docente: ". $docente->getDniDoc() . " " . $docente->getNombres()." ".$docente->getApellidos().'<br>';
    }
    foreach($ca2022I01->listarHorario() as $horario)
    {
    echo "Horario Inicio: ". $horario->geHoraInicio() . " Fin: " . $horario->getHoraFin()." Tipo: ".$horario->getTipoHorario().'<br>';
    }
    }
echo "-----------------------------------------------------------------------".'<br>';

echo "Codigo de Matricula: ". $Ma12022I02->getIdMatricula().'<br>';

foreach($Ma12022I02->listarEstudiante() as $estudiante)
    {
    echo "Estudiante: ". $estudiante->getNombres() . " " . $estudiante->getApellidos().'<br>';
    foreach($ca2022I02->listarPeriodo() as $periodo)
    {
    echo "Periodo: ". $periodo->getNPeriodo().'<br>';
    }
    foreach($ca2022I02->listarCurso() as $curso)
    {
    echo "Curso: ". $curso->getIdCurso() . " " . $curso->getNCurso().'<br>';
    }
    foreach($ca2022I02->listarDocente() as $docente)
    {
    echo "Docente: ". $docente->getDniDoc() . " " . $docente->getNombres()." ".$docente->getApellidos().'<br>';
    }
    foreach($ca2022I02->listarHorario() as $horario)
    {
    echo "Horario Inicio: ". $horario->geHoraInicio() . " Fin: " . $horario->getHoraFin()." Tipo: ".$horario->getTipoHorario().'<br>';
    }
    }
?>