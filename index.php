<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
                <div class="banner">
                    <div class="row"> 
                            <div class="logo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <img src="images/beirut.jpg" alt="Wallpaper">
                            </div>
                            
                            <div class="overlay col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="box">
                                    <h1>Sign Up Form</h1>
                                    <form class="form" action="./functions.php" method="POST">
                                        <input type="text" name="full_name" placeholder="ex: John Smith">
                                        <input type="date" name="birthday" max="2023-01-01" min="1970-12-30">
                                        <select name="weight_category">
                                            <option value="">Weight Category</option>
                                            <option value="66">66 KG</option>
                                            <option value="77">77 KG</option>
                                            <option value="88">88 KG</option>
                                        </select>
                                        <input type="text" name="email" placeholder="ex: user@gmail.com">
                                        <button type="submit"> Submit </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <img src="/images/euro_logo.jpg" alt="logo" id="tlogo">
    </div>
</body>
</html>