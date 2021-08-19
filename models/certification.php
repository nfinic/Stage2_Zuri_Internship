<?php

class Certification{
    private $id;
    private $designation;
    private $year;
    private $idUser;

    function __construct($id, $designation, $year, $idUser){
        $this->id = $id;
        $this->designation = $designation;
        $this->year = $year;
        $this->idUser = $idUser;
    }

    function getId() {
        return $this->id;
    }

    function getDesignation() {
        return $this->designation;
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

    function setDesignation($designation) {
        $this->designation = $designation;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function insertCertification() {
        global $db;
        $result = FALSE;

        $designation = $this->getDesignation();
        $year = $this->getYear();
        $idUser = $this->getIdUser();

        $query = "INSERT INTO certification (designation, year, idUser) VALUES ('$designation', '$year', '$idUser')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getUserCertification($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM certification WHERE idUser =$idUser");
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