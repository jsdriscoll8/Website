<?php
include 'top.php';
?>
            <main>
                <p>
                    Create Table SQL
                </p>

                <pre>
                    CREATE TABLE tblEnergyData(
                        fldSource VARCHAR(45),
                        fldShare FLOAT,
                        fldGainLoss FLOAT,
                        PRIMARY KEY (fldSource)
                    );

                    CREATE TABLE tblEnergySurvey2(
                        pmkEnergyFormID INT AUTO_INCREMENT PRIMARY KEY,
                        fldEmail VARCHAR(100),
                        fldLastName VARCHAR(30),
                        fldFirstName VARCHAR(30),
                        fldInformed VARCHAR(30),
                        fldNuclearEnergy TINYINT(1),
                        fldSolarEnergy TINYINT(1),
                        fldWindEnergy TINYINT(1),
                        fldGeothermalEnergy TINYINT(1)
                    );

                    INSERT INTO tblEnergySurvey2
                    (fldEmail, fldLastName, fldFirstName, fldInformed, fldNuclearEnergy,
                    fldSolarEnergy, fldWindEnergy, fldGeothermalEnergy)
                    VALUES ('jsdriscoll8@gmail.com', 'Driscoll', 'John', 'radMuchInformed',
                    1, 1, 1, 1);

                    INSERT INTO tblEnergyData VALUES
                        ('Zero carbon sources', '39.4', '-0.3'),
                        ('Natural gas', '38.3', '-2.3'),
                        ('Coal', '21.8', '2.5'),
                        ('Petroleum sources', '0.5', '0.0');

                    SELECT fldSource, fldShare, fldGainLoss FROM tblEnergyData ORDER BY fldShare DESC;
                </pre>

            </main>
        <?php 
        include 'footer.php'; 
        ?>
    </body>
</html>