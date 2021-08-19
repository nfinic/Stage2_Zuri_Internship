<?php

class Skills{
    private $id;
    private $designation;
    private $level;
    private $idUser;

    function __construct($id, $designation, $level, $idUser){
        $this->id = $id;
        $this->designation = $designation;
        $this->level = $level;
        $this->idUser = $idUser;
    }

    function getId() {
        return $this->id;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getLevel() {
        return $this->level;
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

    function setLevel($level) {
        $this->level = $level;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function insertSkill() {
        global $db;
        $result = FALSE;

        $designation = $this->getDesignation();
        $level = $this->getLevel();
        $idUser = $this->getIdUser();

        $query = "INSERT INTO skills (designation, level, idUser) VALUES ('$designation', '$level', '$idUser')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getUserSkills($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM skills WHERE idUser =$idUser");
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