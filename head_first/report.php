<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php

    #POPULATE THE VARIABLES
  #$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $first_name=$_POST['firstname'] ;
  $last_name=$_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $other = $_POST['other'];
  $email = $_POST['email'];

    #CREATE A QUERY - INSERT IN THIS CASE
  $insert_query="INSERT INTO aliens_abduction(first_name,last_name,when_it_happened,how_long,how_many,alien_description,what_they_did,fang_spotted, other,email) ".
  "VALUES ('$first_name','$last_name','$when_it_happened','$how_long','$how_many','$alien_description','$what_they_did','$fang_spotted','$other','$email') ";

  $temp_query="insert into aliens_abduction(first_name,last_name, ".
    "when_it_happened,how_long,how_many,alien_description,what_they_did,fang_spotted, other,email) ".
    "values ('madaadanav', ".
    "'garasdekar','06/10','1 hour','50','big green','played with me','yes','i saw your dog','maga0404@colorado.edu') ".
    "";

    #CONNECT TO THE DATABASE
  $dbc=mysqli_connect('localhost','root','1q2w3e4r','aliendatabase')
    or die('Error in connecting to database');
    
    #EXECUTE A QUERY
  echo $insert_query;
  echo '<br />';
  echo $temp_query;
  echo '<br />';
  mysqli_query($dbc,$insert_query)
    or die("Error in carrying out the query");

    #CLOSE THE DATABASE CONNECTION
  mysqli_close($dbc)
    or die("Error in closing the database connection");



    # ECHO STATEMENTS FOR DYNAMIC HTML
  echo 'Thanks for submitting the form.<br />';
  echo 'You were abducted ' . $when_it_happened;
  echo ' and were gone for ' . $how_long . '<br />';
  echo 'Number of aliens: ' . $how_many . '<br />';
  echo 'Describe them: ' . $alien_description . '<br />';
  echo 'The aliens did this: ' . $what_they_did . '<br />';  echo 'Was Fang there? ' . $fang_spotted . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;

?>

</body>
</html>
