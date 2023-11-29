<?php
include 'top.php';

$dataIsGood = false;
$errorMessage = '';
$message = '';

$email = '';
$firstName = '';
$lastName = '';
$nuke = 0;
$solar = 0;
$wind = 0;
$geothermal = 0;
$informed = '';

function getData($field) {
    if(!isset($_POST[$field]))
        $data = "";
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;

    $firstName = getData('txtFirstName');
    $lastName = getData('txtLastName');
    $email = getData('txtEmail');
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $nuke = (int) getData('chkNuclear');
    $solar = (int) getData('chkSolar');
    $wind = (int) getData('chkWind');
    $geothermal = (int) getData('chkGeothermal'); 

    $informed = getData('radInformed');

    print PHP_EOL . '<!-- Starting Validation -->' . PHP_EOL;
    $dataIsGood = true;

    
    if($firstName == '') {
        $errorMessage .= '<p class="mistake">Please type in your first name.</p>';
        $dataIsGood = false;
    }
    elseif(!verifyAlphaNum($firstName)){
        $errorMessage .= '<p class="mistake">Your first name contains invalid characters.</p>'; 
        $dataIsGood = false;
    }

    if($lastName == '') {
        $errorMessage .= '<p class="mistake">Please type in your last name.</p>';
        $dataIsGood = false;
    }
    elseif(!verifyAlphaNum($lastName)){
        $errorMessage .= '<p class="mistake">Your last name contains invalid characters.</p>'; 
        $dataIsGood = false;
    }

    if($email == '') {
        $errorMessage .= '<p class="mistake">Please type in your email.</p>';
        $dataIsGood = false;
    }
    elseif(!filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $errorMessage .- '<p class="mistake">Your email address contains invalid characters.</p>';
        $dataIsGood = false;
    }

    $totalChecked = 0;

    if($nuke != 1)
        $nuke = 0;
    $totalChecked += $nuke;

    if($solar != 1)
        $solar = 0;
    $totalChecked += $solar;

    if($wind != 1)
        $wins = 0;
    $totalChecked += $wind;

    if($geothermal != 1)
        $geothermal = 0;
    $totalChecked += $geothermal;

    if($totalChecked == 0) {
        $errorMessage .= '<p class="mistake">Please select at least one checkbox.</p>';
        $dataIsGood = false;
    }

    if($informed != "radMuchInformed" && $informed != "radSomewhatInformed" && $informed != "radNotInformed") {
        $errorMessage .= '<p class="mistake"> Please indicate how well informed this 
        page made you.</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . '<!-- Starting Saving -->' . PHP_EOL;
    
    $sql = 'INSERT INTO tblEnergySurvey2
                    (fldEmail, fldLastName, fldFirstName, fldInformed, fldNuclearEnergy,
                    fldSolarEnergy, fldWindEnergy, fldGeothermalEnergy)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    $statement = $pdo->prepare($sql);
    $data = array($email, $lastName, $firstName, $informed, $nuke, $solar, $wind, $geothermal);

    if($statement->execute($data)) {
        $message = '<h2>Thank you!</h2>';
        $message.= '<p>Your information was successfully saved.</p>';
    }
    else {
        $message = '<p>Record was NOT successfully saved.</p>';
        $dataIsGood = false;
    }
}
?>

        <main>
            <?php
                print $errorMessage;
                print $message;

                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>';
            ?>

            <form action="#" method="POST" id="form">
                <figure id="formFig">
                    <img alt="A notebook" src="images/notebook.jpg">
                    <figcaption>
                        <cite>Source: Freebie photography</cite>
                    </figcaption>
                </figure>

                <fieldset class="personalInfo">
                    <p>
                        <label for="txtFirstName">First name:</label>
                        <input type="text" name="txtFirstName" id="firstName"
                        <?php print 'value="' . $firstName . '"'; ?>>
                    </p>

                    <p>
                        <label for="txtLastName">Last name:</label>
                        <input type="text" name="txtLastName" id="lastName"
                        <?php print 'value="' . $lastName . '"'; ?>>
                    </p>

                    <p>
                        <label for="txtEmail">Email:</label>
                        <input type="email" name="txtEmail" id="email" placeholder="name@domain.com"
                        <?php print 'value="' . $email . '"'; ?>>
                    </p>
                </fieldset>

                <fieldset class="interestedCheckbox">
                    <legend>Which energy types are you interested in?</legend>

                    <p>
                        <input type="checkbox" name="chkNuclear" id="chkNuclear" value="1"
                        <?php if($nuke == 1) print 'checked'; ?>> 
                        <label for="chkNuclear">Nuclear energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkSolar" id="chkSolar" value="1"
                        <?php if($solar == 1) print 'checked'; ?>> 
                        <label for="chkSolar">Solar energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkWind" id="chkWind" value="1"
                        <?php if($wind == 1) print 'checked'; ?>>
                        <label for="chkWind">Wind energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkGeothermal" id="chkGeothermal" value="1"
                        <?php if($geothermal == 1) print 'checked'; ?>> 
                        <label for="chkGeothermal">Geothermal energy</label>
                    </p>
                </fieldset>

                <fieldset class="informedRadio">
                    <legend> Do you feel more informed about green energy because of this page?</legend> 

                    <p>
                        <input type="radio" name="radInformed" id="radMuchInformed" value="radMuchInformed"
                        <?php if($informed == "radMuchInformed") print 'checked'; ?>>
                        <label for="radMuchInformed">Yes</label> 
                    </p>

                    <p>
                        <input type="radio" name="radInformed" id="radSomewhatInformed" value="radSomewhatInformed"
                        <?php if($informed == "radSomewhatInformed") print 'checked'; ?>>
                        <label for="radSomewhatInformed">Somewhat</label> 
                    </p>

                    <p>
                        <input type="radio" name="radInformed" id="radNotInformed" value="radNotInformed"
                        <?php if($informed == "radNotInformed") print 'checked'; ?>>
                        <label for="radNotInformed">No</label> 
                    </p>

                    <p class="sButton">
                        <input type="submit"> 
                    </p>
                </fieldset>
            </form>
        </main> 

        <?php
        include 'footer.php';
        ?>
    </body>
</html>