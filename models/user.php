<?php

class User{
    private $id;
    private $firstName;
    private $lastName;
    private	$midleName;
    private	$gender;
    private	$birthDate;
    private	$maritalStatus;
    private	$country;
    private	$state;
    private $city;
    
    function __construct($id, $firstName, $lastName, $midleName, $gender, $birthDate, $maritalStatus, $country, $state, $city){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->midleName = $midleName;
        $this->gender = $gender;
        $this->birthDate = $birthDate;
        $this->maritalStatus = $maritalStatus;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
    }

    function getId() {
        return $this->id;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getMidleName() {
        return $this->midleName;
    }

    function getGender() {
        return $this->gender;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getMaritalStatus() {
        return $this->maritalStatus;
    }

    function getCountry() {
        return $this->country;
    }

    function getState() {
        return $this->state;
    }

    function getCity() {
        return $this->city;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setMidleName($midleName) {
        $this->midleName = $midleName;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setMaritalStatus($maritalStatus) {
        $this->maritalStatus = $maritalStatus;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function insertUser() {
        global $db;
        $result = FALSE;

        $firstName = $this->getFirstName();
        $lastName = $this->getLastName();
        $midleName = $this->getMidleName();
        $gender = $this->getGender();
        $birthDate = $this->getBirthDate();
        $maritalStatus = $this->getMaritalStatus();
        $country = $this->getCountry();
        $state = $this->getstate();
        $city = $this->getCity();

        $query = "INSERT INTO user (firstName, lastName, midleName, gender, birthDate, maritalStatus, country, state, city) VALUES ('$firstName', '$lastName', '$midleName', '$gender', '$birthDate', '$maritalStatus', '$country', '$state', '$city')";

        if ($db->query($query)) {
            $result = TRUE;
        }
        return $result;
    }
}

function getNomAllUsers(){
    global $db;
    $response = $db->query("SELECT * FROM user");
    $data = $response->fetchAll();
    foreach ($data as $value) {

        echo "<form method='post' action='../controllers/resume.php'>";
        echo "<input type='hidden' name='id' value='$value[0]'>";
        echo "<input type='submit'  style='none' name='submit' value='$value[1]'>";
        echo "</form>";
        
    }
}

function getUniqueUser($idUser){
    global $db;
    if(isset($idUser)){
        $response = $db->query("SELECT * FROM user WHERE id =$idUser");
        $data = $response->fetch();
        $user = new User($idUser, $data['1'], $data['2'], $data['3'], $data['4'], $data['5'], $data['6'], $data['7'], $data['8'], $data['9']);

        return $user;
    }
}

function isPersonalDataFilled($firstName, $lastName, $midleName, $gender, $birthDate, $maritalStatus, $country, $state, $city){
    $result = FALSE;

    if ($firstName != NULL and $lastName != NULL and $midleName != NULL) {
        if ($gender != NULL and $birthDate != NULL and $maritalStatus != NULL) {
            if ( $country != NULL and $state != NULL and $city != NULL) {
                $result = TRUE;
            }
        }
    }
    return $result;
}
