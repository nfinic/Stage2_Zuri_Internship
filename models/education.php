<?php

class Education{
    private $id;
    private $degree;
    private $year;
    private $idUser;

    function __construct($id, $degree, $year, $idUser){
        $this->id = $id;
        $this->degree = $degree;
        $this->year = $year;
        $this->idUser = $idUser;
    }

    function getId() {
        return $this->id;
    }

    function getDegree() {
        return $this->degree;
    }

    function getYear() {
        return $this->year;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDegree($degree) {
        $this->degree = $degree;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function insertEducation() {
        global $db;
        $result = FALSE;

        $degree = $this->getDegree();
        $year = $this->getYear();
        $idUser = $this->getIdUser();

        $query = "INSERT INTO education (degree, year, idUser) VALUES ('$degree', '$year', '$idUser')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getUserEducation($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM education WHERE idUser =$idUser");
        $data = $response->fetchAll();
        foreach ($data as $value) {
            echo '<tr>';
            echo '<td>';
            echo $value[1];
            echo '</td>';
            echo '<td>';
            echo $value[2];
            echo '</td>';
            echo '</tr>';
        }
    }
}