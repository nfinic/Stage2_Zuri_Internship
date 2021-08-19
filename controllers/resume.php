<?php
include '../config/config.php';
include '../models/user.php';
include '../models/certification.php';
include '../models/education.php';
include '../models/experience.php';
include '../models/language.php';
include '../models/skills.php';

$id = $_POST['id'];

$user = getUniqueUser($id);

include_once '../views/resume.php';