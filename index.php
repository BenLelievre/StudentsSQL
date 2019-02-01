<?php
$host="localhost";
$base="students";
$user="root";
$mdp="rtlry";
$bdd = new PDO('mysql:host='.$host.';dbname='.$base, $user, $mdp); 
$sql = 'SELECT firstname, lastname, email FROM student';
$req = $bdd->query($sql);
while($student = $req->fetch()) {
    echo '<li>' . $student['firstname'].', ' .$student['lastname']. '(' .$student['email'].')</li>';}
$req->closeCursor();
?>
