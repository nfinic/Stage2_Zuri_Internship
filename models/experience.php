<?php

class Experience{
    private $id;
    private $designation;
    private $startDate;
    private $endDate;
    private $idUser;

    function __construct($id, $designation, $startDate, $endDate, $idUser){
        $this->id = $id;
        $this->designation = $designation;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->idUser = $idUser;
    }

    function getId() {
        return $this->id;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getStartDate() {
        return $this->startDate;
    }

    function getEndDate() {
        return $this->endDate;
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

    function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function insertExperience() {
        global $db;
        $result = FALSE;

        $designation = $this->getDesignation();
        $startDate = $this->getStartDate();
        $endDate = $this->getEndDate();
        $idUser = $this->getIdUser();

        $query = "INSERT INTO experience (designation, startDate, endDate, idUser) VALUES ('$designation', '$startDate', '$endDate', '$idUser')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getUserExperience($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM experience WHERE idUser =$idUser");
        $data = $response->fetchAll();
        foreach ($data as $value) {
            echo '<tr>';
            echo '<td>';
            echo $value[1];
            echo '</td>';
            echo '<td>';
            echo $value[2];
            echo '</td>';
            echo '<td>';
            echo $value[3];
            echo '</td>';
            echo '</tr>';
        }
    }
}