<?php
// // IDEA:
// Get the user's info, transfer it to selected category, take the user to 
// // a page with the names of the opponents. when user clicks on the name details will show up.
/** yes but i also realized that i can add required in the html for extra validation i guess is it good?
 * its not enough and not secure, you also need to validate from backend okay (meaning php side)deal
 * I have an AI tool that predicts what I might say ok back to code now
 */
// Collecting User_Info:
// ~~~~~~~~~~~~~~~~~~~~~

$user_info = array(
    "name" => $_POST['full_name'],
    "age" => $_POST['birthday'],
    "category" => $_POST['weight_category'],
    "email" => $_POST['email']
);

// Conditions:
// ~~~~~~~~~~~
if (!isset($user_info['name']) || empty($user_info['name'])) {
    echo 'Please enter your full name <br/>';
    die;
}
if (!isset($user_info['age']) || empty($user_info['age'])) {
    echo 'Please enter your birthdate <br/>';
    die;
}
if (!isset($user_info['category']) || empty($user_info['category'])) {
    echo 'Please enter your weight bracket <br/>';
    die;
}
if (!isset($user_info['email']) || empty($user_info['email'])) {
    echo 'Please enter your email <br/>';
    die;
}

// ok good you validated data first, before doing any work.
// if what the user submitted isn't valid, you can just stop here. no need to let the code run any further.
//got it? 


// Creating Opponent Info:
// ~~~~~~~~~~~~~~~~~~~~~~~

$brackets = array(
    "66" => array(
        array(
            "name" => 'Marc.J',
            "age" => '2002-3-14',
            "category" => '66',
            "email" => 'marc.J@gmail.com'
        ),
        array(
            "name" => 'Joe.B',
            "age" => '2001-10-12',
            "category" => '66',
            "email" => 'Joe.B@gmail.com'
        ),
        array(
            "name" => 'Fred.A',
            "age" =>  '1999-12-20',
            "category" => '66',
            "email" => 'Fred.A@gmail.com'
        )
    ),

    "77" => array(
        array(
            "name" => 'Ali',
            "age" =>  '2000-2-21',
            "category" => '77',
            "email" => 'ali@gmail.com'
        ),
        array(
            "name" => 'Firas',
            "age" =>  '1999-12-20',
            "category" => '77',
            "email" => 'firas@gmail.com'
        ),
        array(
            "name" => 'Malek',
            "age" =>  '1997-12-20',
            "category" => '77',
            "email" => 'malek@gmail.com'
        )
    ),

    "88" => array(
        array(
            "name" => 'Mohammad',
            "age" =>  '1999-3-30',
            "category" => '88',
            "email" => 'mohammad@gmail.com'
        ),
        array(
            "name" => 'Riyad',
            "age" =>  '2001-1-12',
            "category" => '88',
            "email" => 'riyad@gmail.com'
        ),
        array(
            "name" => 'Hussein',
            "age" =>  '1994-3-14',
            "category" => '88',
            "email" => 'hussein@gmail.com'
        )
    )
);

// Transferring User Info to Weight Bracket:
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// WTF?? 

// $user_info['category'] // 77
$existing_brackets = array_keys($brackets); // [66, 77, 88]

if (in_array($user_info['category'], $existing_brackets)) {
    array_push($brackets[$user_info['category']], $user_info);
} else {
    echo "Invalid user category";
    die;
}

$opponents = $brackets[$user_info['category']];
$weight_class = $user_info['category'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="user_opponents">
        <h1>All users in the <?php echo $weight_class; ?> bracket are listed below:</h1>
        <!-- loops -->
        <?php foreach ($opponents as $opponent) { ?>
            <div class="user-details">
                <p>Name: <?php echo $opponent['name']; ?></p>
                <p>Age: <?php echo $opponent['age']; ?></p>
                <p>Email: <?php echo $opponent['email']; ?></p>
            </div>
        <?php } ?>

    </div>

</body>

</html>