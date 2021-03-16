<?php
session_start();

require 'config.php';

$animalname = filter_input(INPUT_POST, 'name');
$race = filter_input(INPUT_POST, 'race');
$color = filter_input(INPUT_POST, 'color');
$gender = filter_input(INPUT_POST, 'gender');
$specie = filter_input(INPUT_POST, 'specie');
$size = filter_input(INPUT_POST, 'size');
$castrated = filter_input(INPUT_POST, 'castrated');
$vaccinated = filter_input(INPUT_POST, 'vaccinated');
$vermifugated = filter_input(INPUT_POST, 'vermifugated');
$arrivaldate = filter_input(INPUT_POST, 'arrivaldate');


if ($name && $race && $color) {
    $sql = $pdo-> prepare("INSERT INTO caes (animalname, race, color, gender, specie, size, castrated, vaccinated, vermifugated, arrivaldate) VALUES (:animalname, :race, :color, :gender, :specie, :size, :castrated, :vaccinated; :vermifugated, :arrivaldate)");
    $sql->bindValue(':animalname', $animalname);
    $sql->bindValue(':race', $race);
    $sql->bindValue(':color', $color);
    $sql->bindValue(':gender', $gender);
    $sql->bindValue(':specie', $specie);
    $sql->bindValue(':size', $size);
    $sql->bindValue(':castrated', $castrated);
    $sql->bindValue(':vaccinated', $vaccinated);
    $sql->bindValue(':vermifugated', $vermifugated);
    $sql->bindValue(':arrivaldate', $arrivaldate);
    $sql->execute();
    header("Location: home.php");
} else {
    header("Location: add_animals.php");
    exit;
}
