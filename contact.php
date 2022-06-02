<?php

function send_Email()
{
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_POST["email"])) {
        $name = input_data($_POST["name"]);
        $number = input_data($_POST["number"]);
        $email = input_data($_POST["email"]);
        $radio = $_POST["radio"];
        $radioTwo = $_POST["radioTwo"];
        $radioThree = $_POST["radioThree"];
        $where = input_data($_POST["where"]);
        $radioFour = $_POST["radioFour"];
        $niceTry = $_POST["niceTry"]; // empty field honeypot
        if (!empty($_POST['niceTry'])) die();

        $to = "daniel@dvbuyersagency.com.au";
        $body = "";

        $body .= "From: " . $name . "\r\n";
        $body .= "Number: " . $number . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "What do you want to buy?: " . $radio . "\r\n";
        $body .= "What type of property?: " . $radioTwo . "\r\n";
        $body .= "What is your budget?: " . $radioThree . "\r\n";
        $body .= "Where do you want to buy?: " . $where . "\r\n";
        $body .= "When do you want to buy?: " . $radioFour . "\r\n";

        if (isset($_POST["submit"])) {
            mail($to, "DVH Request Info", $body);
            header("Location: thanks.php");
        }
    }
}
send_Email();

?>
<!DOCTYPE html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="If you have any questions concerning our service please feel free to contact us. keep in touch!.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us - DV Buyers Agency</title>
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://www.dvbuyersagency.com.au/contact.php" />
</head>

<body class="centerThis">
    <main role="main">
        <?php include("header.php"); ?>
        <div class="someSpace">
            <div class="contactFormSec">
                <h2 style="font-color:black;">Contact Us</h2>
                <h3 class="lead">Get in touch.</h3>
            </div>
            <form action="" id="theForm" method="POST" onsubmit="return validateForm()">
                <div class="backForm">
                    <div class="form-group-one">
                        <label for="name"><strong>Name</strong></label></br>
                        <input type="text" id="name" name="name"></br>
                        <label for="number"><strong>Mobile Number</strong></label></br>
                        <input type="text" id="number" name="number"></br>
                        <label for="email"><strong>Email</strong></label><br>
                        <input type="email" id="email" name="email"></br>
                    </div>
                    <div class="form-group">
                        <h4 class="propOne"><strong>What do you want to buy?</strong></h4>
                        <input type="radio" id="house" name="radio" value="House">
                        <label for="house">House</label></br>
                        <input type="radio" id="unit" name="radio" value="Unit/Apartment">
                        <label for="unit">Unit/Apartment</label></br>
                        <input type="radio" id="townhouse" name="radio" value="Townhouse">
                        <label for="townhouse">Townhouse</label></br>
                        <input type="radio" id="land" name="radio" value="Land">
                        <label for="land">Land</label></br></br>
                    </div>
                    <div class="form-group">
                        <h4 class="propTwo"><strong>What type of property?</strong></h4>
                        <input type="radio" id="homeTwo" name="radioTwo" value="Home">
                        <label for="homeTwo">Home</label></br>
                        <input type="radio" id="land" name="radioTwo" value="Investment Property">
                        <label for="investment">Investment Property</label></br></br>
                    </div>
                    <div class="form-group">
                        <input type="text" id="niceTry" name="niceTry" />
                        <h4 class="propThree"><strong>What is your budget?</strong></h4>
                        <input type="radio" id="budgetOne" name="radioThree" value="$0 - $500,000">
                        <label for="budgetOne">$0 - $500,000</label></br>
                        <input type="radio" id="budgetTwo" name="radioThree" value="$500,000 - $100,000">
                        <label for="budgetTwo">$500,000 - $1,000,000</label></br>
                        <input type="radio" id="budgetThree" name="radioThree" value="1, 000,000">
                        <label for="budgetThree">$1, 000,000 +</label></br></br>
                    </div>
                    <div class="form-group">
                        <h4 class="propFour"><strong>Where do you want to buy?</strong></h4>
                        <input type="text" id="where" name="where"></br>
                        </textarea></br>
                        <h4 class="propFive"><strong>When do you want to buy?</strong></h4>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="bOne" name="radioFour" value="ASAP">
                        <label for="bOne">ASAP</label></br>
                        <input type="radio" id="bTwo" name="radioFour" value="Within 3 Months">
                        <label for="bTwo">Within 3 Months</label></br>
                        <input type="radio" id="bThree" name="radioFour" value="3 Months +">
                        <label for="bThree">3 Months +</label></br></br>
                        <input type="submit" id="submit" name="submit"></input>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="py-5 text-center">
            </div>
        </div>
    </main>
    <div class="fix">
        <img class="logoThree" src="img/DVBuyersLogo.png" alt="DV Buyers Logo">
    </div>
    <div class="mt-auto">
        <?php include("footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script src="formValidate.js"></script>
        <script src="script.js"></script>
</body>

</html>