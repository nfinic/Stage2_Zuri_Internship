<?php

include '../models/language.php';

$firstName = $_POST['fistName'];
        $lastName = $_POST['lastName'];
        $midleName = $_POST['middleName'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
        $maritalStatus = $_POST['maritalStatus'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city= $_POST['city'];

        $languageV = $_POST['languagedes'];
        $languageLevel = $_POST['languagelevel'];

        $skillV = $_POST['skill'];
        $skillLevel = $_POST['skillLevel'];

        $degree = $_POST['degree'];
        $degreeYear = $_POST['degreeYear'];

        $certificationV = $_POST['certification'];
        $certificationYear = $_POST['certificationYear'];

        $experienceV = $_POST['experience'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        $idUser = 1;
        $language = new Language(0, $languageV, $languageLevel, $idUser);
        echo $languageV;
        echo $languageLevel;
        echo $idUser;
        
        var_dump($language);