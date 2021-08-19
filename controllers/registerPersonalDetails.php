<?php

include '../config/config.php';
include '../models/user.php';
include '../models/certification.php';
include '../models/education.php';
include '../models/experience.php';
include '../models/language.php';
include '../models/skills.php';

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

    if(isPersonalDataFilled($_POST['fistName'], $_POST['lastName'], $_POST['middleName'], $_POST['gender'], $_POST['birthDate'], $_POST['maritalStatus'], $_POST['country'], $_POST['state'], $_POST['city']))
    {
        $firstName = $_POST['fistName'];
        $lastName = $_POST['lastName'];
        $midleName = $_POST['middleName'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
        $maritalStatus = $_POST['maritalStatus'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city= $_POST['city'];

        
        $user = new User(0, $firstName, $lastName, $midleName, $gender, $birthDate, $maritalStatus, $country, $state, $city);

        if ($user->insertUser()) {
            global $db;
            $response = $db->query("SELECT id FROM user ORDER BY id DESC LIMIT 1");
            $data = $response->fetch();
            $idUser = $data[0];
            
            $language = new Language(0, $languageV, $languageLevel, $idUser);
            $language->insertLanguage();

            $skill = new Skills(0, $skillV, $skillLevel, $idUser);
            $skill->insertSkill();

            $certification = new Certification(0, $certificationV, $certificationYear, $idUser);
            $certification->insertCertification();

            $education = new Education(0, $degree, $degreeYear, $idUser);
            $education->insertEducation();

            $experience = new Experience(0, $experienceV, $startDate, $endDate, $idUser);
            $experience->insertExperience();

            header("Location:./successP.php");
        } else {
            header("Location:./errorP.php");
        }
    } else {
        header("Location:./errorP.php");
    }



