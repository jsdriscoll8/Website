
<header>
    <h1>
        <?php
            if(basename($_SERVER['SCRIPT_FILENAME']) == "index.php")
                print 'Green Energy Policy: Details and Benefits';
            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "form.php")
                print 'Green Energy Form';
            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "about.php")
                print 'About Green Energy';
            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "array.php")
                print 'Geothermal Energy';
            else
                print 'Nuclear Energy'; 
        ?>
    </h1>
</header>