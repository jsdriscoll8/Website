<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Green Energy Form</title>
        <meta name="author" content="John Driscoll">
        <meta name ="description" content="A form collecting
        information on interest in green energy.">

        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" href="css/layout-desktop.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body class="form"> 
        <header>
                <h1>Green Energy Form</h1>
        </header>

        <nav>
            <p id="nav-home">
                <a href="index.php">Home</a>
            </p>
            <p id="nav-detail">
                <a href="detail.php">Nuclear Energy</a>
            </p>
            <p id="nav-form">
                <a href="form.php">Survey</a>
            </p>
            <p id="nav-about">
                <a href="about.php">About</a>
            </p>
        </nav>

        <main>
            <?php
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
                        <label for="firstName">First name:</label>
                        <input type="text" name="firstName" id="firstName">
                    </p>

                    <p>
                        <label for="lastName">Last name:</label>
                        <input type="text" name="lastName" id="lastName">
                    </p>

                    <p>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="name@domain.com">
                    </p>
                </fieldset>

                <fieldset class="interestedCheckbox">
                    <legend>Which energy types are you interested in?</legend>

                    <p>
                        <input type="checkbox" name="chkNuclear" id="chkNuclear" value="1"> 
                        <label for="chkNuclear">Nuclear energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkSolar" id="chkSolar" value="1"> 
                        <label for="chkSolar">Solar energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkWind" id="chkWind" value="1"> 
                        <label for="chkWind">Wind energy</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkGeothermal" id="chkGeothermal" value="1"> 
                        <label for="chkGeothermal">Geothermal energy</label>
                    </p>
                </fieldset>

                <fieldset class="informedRadio">
                    <legend> Do you feel more informed about green energy because of this page?</legend> 

                    <p>
                        <input type="radio" name="radInformed" id="radMuchInformed" value="radMuchInformed">
                        <label for="radMuchInformed">I feel much more informed.</label> 
                    </p>

                    <p>
                        <input type="radio" name="radInformed" id="radSomewhatInformed" value="radSomewhatInformed">
                        <label for="radSomewhatInformed">I feel somewhat more informed.</label> 
                    </p>

                    <p>
                        <input type="radio" name="radInformed" id="radNotInformed" value="radNotInformed">
                        <label for="radNotInformed">I don't feel more informed.</label> 
                    </p>

                    <p class="sButton">
                        <input type="submit"> 
                    </p>
                </fieldset>
            </form>
        </main> 

        <footer>
            <p>
                <a href="../sitemap.php">Sitemap</a>
            </p>
        </footer>
    </body>
</html>