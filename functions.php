<?php
// // IDEA:
// Get the user's info, transfer it to selected category, take the user to 
// // a page with the names of the opponents. when user clicks on the name details will show up.

// Collecting User_Info:
// ~~~~~~~~~~~~~~~~~~~~~
$user_name= $_POST['full_name'];
$user_age= $_POST['birthday'];
$user_category= $_POST['weight_category'];
$user_mail= $_POST['email'];

// Conditions:
// ~~~~~~~~~~~
if (!isset($user_name) || empty($user_name)){
    echo 'Please enter your full name <br/>';
    die;}
if (!isset($user_age) || empty($user_age)){
    echo 'Please enter your birthdate <br/>';
    die;}
if (!isset($user_category) || empty($user_category)){
    echo 'Please enter your weight bracket <br/>';
    die;}
if (!isset($user_mail) || empty($user_mail)){
    echo 'Please enter your email <br/>';
    die;}    


$user_info = array(
    "new user" => array(
            "name" => $user_name,
            "age" => $user_age,
            "category" => $user_category,
            "mail" => $user_mail
));

// Creating Opponent Info:
// ~~~~~~~~~~~~~~~~~~~~~~~
   
$brackets = array(    
    
    "bracket_66" => array( 

        "MarcJ" => array(
                "name"=> 'Marc.J',
                "age" => '2002-3-14',
                "category" => '66',
                "mail" => 'marc.J@gmail.com'),
        "Joe.B" => array( 
                "name"=> 'Joe.B',
                "age" => '2001-10-12',
                "category" => '66',
                "mail" => 'Joe.B@gmail.com'),
        "Fred.A" => array(
                "name" =>'Fred.A',
                "age" =>  '1999-12-20',
                "category" => '66',
                "mail" => 'Fred.A@gmail.com')
            ), 

    "bracket_77" => array(

        'Ali' => array(
                "name" =>'Ali',
                "age" =>  '2000-2-21',
                "category" => '77',
                "mail" =>'ali@gmail.com'),
        'Firas' => array(
                "name" =>'Firas',
                "age" =>  '1999-12-20',
                "category" => '77',
                "mail" =>'firas@gmail.com'),
        'Malek' => array(
                "name" =>'Malek',
                "age" =>  '1997-12-20',
                "category" => '77',
                "mail" =>'malek@gmail.com')
            ),

    "bracket_88" => array(

        "Mohammad" => array(
                "name" =>'Mohammad',
                "age" =>  '1999-3-30',
                "category" => '88',
                "mail" =>'mohammad@gmail.com'),
        "Riyad" => array(
                "name" =>'Riyad',
                "age" =>  '2001-1-12',
                "category" => '88',
                "mail" =>'riyad@gmail.com'),
        "Hussein" => array(
                "name" =>'Hussein',
                "age" =>  '1994-3-14',
                "category" => '88',
                "mail" =>'hussein@gmail.com')
        )
    );

// Transferring User Info to Weight Bracket:
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

if ($user_info['new user']["category"] == "66") {
    array_push($brackets["bracket_66"], $user_info);
} elseif ($user_info['new user']["category"] == "77") {
        array_push($brackets['bracket_77'], $user_info);
    } else {
        array_push($brackets['bracket_88'], $user_info);
    }

// echo "<pre>"; 
// var_dump($user_category);
// var_dump($user_info["category"]);

// echo "<pre>";
// print_r($brackets['bracket_66']);
// echo "<pre>";
// print_r($brackets['bracket_77']);
// echo "<pre>";
// print_r($brackets['bracket_88']);

// $fighter1 = $_POST['fighter1'];

// based on the users Bracket
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./functions.css">
</head>
<body>

<div class="user_opponents">
    <h1>Click on the button to check your bracket's info.</h1>
    <button>Opponents</button>
    <div class="btn-click">
        <a href="#">hello</a>
        <a href="#">hello</a>
        <a href="#">hello</a>
        <a href="#">hello</a>
    </div>

</div>

</body>
</html>