<?php
// // IDEA:
// Get the user's info, transfer it to selected category, take the user to 
// // a page with the names of the opponents. when user clicks on the name details will show up.

// Re-usables:
// ~~~~~~~~~~~
// $name='name';
// $age='birthdate';
// $category='bracket';
// $mail='email';

// Collecting User_Info:
// ~~~~~~~~~~~~~~~~~~~~~
$user_name= $_POST['full_name'];
$user_age= $_POST['birthday'];
$user_category= $_POST['weight_category'];
$user_mail= $_POST['email'];

$user_info = [
    "name" => $user_name,
    "age" => $user_age,
    "category" => $user_category,
    "mail" => $user_mail
];

// echo "<pre>";
// print_r($user_info);

// Creating Opponent Info:
// ~~~~~~~~~~~~~~~~~~~~~~~
$bracket_66= array( 
    array(
        "name"=> 'Marc.J',
        "age" => '2002-3-14',
        "category" => '66',
        "mail" => 'marc.J@gmail.com'
    ),
    array(
        "name"=> 'Joe.B',
        "age" => '2001-10-12',
        "category" => '66',
        "mail" => 'Joe.B@gmail.com'
    ),
    array(
    "name" =>'Fred.A',
    "age" =>  '1999-12-20',
    "category" => '66',
    "mail" =>'Fred.A@gmail.com'
    )
);

$bracket_77=array(
    array(
        "name" =>'Ali',
        "age" =>  '2000-2-21',
        "category" => '77',
        "mail" =>'ali@gmail.com'
    ),
    array(
        "name" =>'Firas',
        "age" =>  '1999-12-20',
        "category" => '77',
        "mail" =>'firas@gmail.com'
    ),
    array(
        "name" =>'Malek',
        "age" =>  '1997-12-20',
        "category" => '77',
        "mail" =>'malek@gmail.com'
        )
);

$bracket_88=array(
    array(
        "name" =>'Mohammad',
        "age" =>  '1999-3-30',
        "category" => '88',
        "mail" =>'mohammad@gmail.com'
    ),
    array(
        "name" =>'Riyad',
        "age" =>  '2001-1-12',
        "category" => '88',
        "mail" =>'riyad@gmail.com'
    ),
    array(
        "name" =>'Hussein',
        "age" =>  '1994-3-14',
        "category" => '88',
        "mail" =>'hussein@gmail.com'
    )
);


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
else{
    echo 'Good Luck';   
    }

// Transferring User Info to Weight Bracket:
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if ($user_category='66'){
    // array_push($bracket_66, $user_info)
    print_r(array_merge($bracket_66,$user_info));}
    else{
        die;
    }

if ($user_category='77'){
    array_push($bracket_77, $user_info);}
    else{
        die;
    }

if ($user_category='88'){
    array_push($bracket_88, $user_info);}
    else{
        die;
    }

echo "<pre>";
print_r($bracket_66);
echo "<pre>";
print_r($bracket_77);
echo "<pre>";
print_r($bracket_88);
// // print_r( $bracket_66[$name = $age]);


?>