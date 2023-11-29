<nav>
    <p id="nav-home">
        <a class="<?php
        if($pathParts['filename'] == "index") {
            print 'activePage';
        }
        ?>" href="index.php">Home</a>
    </p>
    <p id="nav-detail">
        <a class="<?php
        if($pathParts['filename'] == "detail") {
            print 'activePage';
        }
        ?>" href="detail.php">Nuclear Energy</a>
    </p>
    <p id="nav-form">
        <a class="<?php
        if($pathParts['filename'] == "form") {
            print 'activePage';
        }
        ?>" href="form.php">Survey</a>
    </p>
    <p id="nav-about">
        <a class="<?php
        if($pathParts['filename'] == "about") {
            print 'activePage';
        }
        ?>" href="about.php">About</a>
    </p>
    <p id="nav-array">
        <a class="<?php
        if($pathParts['filename'] == "array") {
            print 'activePage';
        }
        ?>" href="array.php">Geothermal Energy</a>
    </p>
</nav>