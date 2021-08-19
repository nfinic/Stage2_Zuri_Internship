<?php

class Language{
    private $id;
    private $language;
    private $level;
    private $idUser;

    function __construct($id, $language, $level, $idUser){
        $this->id = $id;
        $this->language = $language;
        $this->level = $level;
        $this->idUser = $idUser;
    }

    function getId() {
        return $this->id;
    }

    function getLanguage() {
        return $this->language;
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

    function setLanguage($language) {
        $this->language = $language;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function insertLanguage() {
        global $db;
        $result = FALSE;

        $language = $this->getLanguage();
        $level = $this->getLevel();
        $idUser = $this->getIdUser();

        $query = "INSERT INTO language (language, level, idUser) VALUES ('$language', '$level', '$idUser')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getUserLanguage($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM language WHERE idUser =$idUser");
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

function isLanguageDataFilled($language, $level, $idUser){
    $result = FALSE;

    if ($language != NULL and $level != NULL and $idUser != NULL) {
        
                $result = TRUE;
            
    }
    return $result;
}
