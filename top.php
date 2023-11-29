<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Green energy policies</title>
        <meta name="author" content="John Driscoll">
        <meta name ="description" content="A discussion of green energy policies
            and trends that I believe would improve society, as well as detailing the drawbacks
            of traditional energy sources. Topics include fossil fuels, nuclear energy, and cost
            and efficiency comparisons.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" href="css/layout-desktop.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" href="css/layout-tablet.css?version=<?php print time(); ?>" media="(max-width: 820px)" type="text/css">
        <link rel="stylesheet" href="css/layout-phone.css?version=<?php print time(); ?>" media="(max-width: 430px)" type="text/css">
    </head>
<?php
if(basename($_SERVER['SCRIPT_FILENAME']) == "index.php")
    print '<body class="index">';
elseif(basename($_SERVER['SCRIPT_FILENAME']) == "form.php")
    print '<body class="form">';
else
    print '<body class="exBottom">';

include 'database-connect.php';
include 'header.php';
include 'nav.php';
?>