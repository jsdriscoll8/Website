<?php
include 'top.php';
$geothermal = array(
    array('United States', 'Indonesia', 'Philippines', 'Turkey', 'New Zealand'),
    array('North America', 'Asia', 'Asia', 'Asia', 'Oceania'),
    array(3.7, 2.3, 1.9, 1.7, 1.0)
);

?>

        <main>
            <section class="about">
                <h2> 
                    What is geothermal energy?
                </h2> 
                <p>
                    Geothermal energy is energy that is harvested from heat within the Earth.
                    The majority of this heat comes from the decay of radioactive isotopes
                    beneath the Earth's surface, especially potassium-40 and thorium-232.
                    Relevantly, if this heat comes into contact with water, the steam generated
                    can be used to produce electricity. Places with large and easily accessible
                    bodies of geothermally heated water are those most suited for the energy type:
                    Iceland is known for using its volcanic landscape to great effect.
                    Otherwise, more effort is needed, as drilling towards heat sources will be
                    necessary. Due to the consistency of heating processes within the Earth, geothermal
                    is quite reliable.
                </p>
            </section>
            <section class="heat-pumps">
                <h2>
                    Heat pumps
                </h2>
                <p>
                    Smaller pockets of geothermal energy are not always useful for the generation
                    of electricity. However, such pockets are commonly found within a few hundred feet under the Earth's 
                    surface. We may use this low-temperature energy to heat homes and use in industrial
                    processes. By creating an underground loop system, warming air as it moves through,
                    a building may no longer need to use much if any grid energy for heating. The Environmental
                    Protection Agency states that geothermal heating is the most energy efficient and environmentally
                    safe heating system currently available. When the University of Indiana swapped coal boilers for 
                    heat pumps, for example, they saved $2 million per year on energy costs. 
                 </p>
            </section>
            <section class="countries">
                <h2>
                    Geothermal energy production by nation
                </h2>
                <p>
                    Rows of data: <?php print sizeof($geothermal); ?>
                </p>
                    <table>
                        <caption> Geothermal energy production by country, 2021 </caption>
                        <tr><th>Country</th><th>Continent</th><th>Production (gigawatts)</th> </tr>
                        <?php
                        for($i = 0; $i < 5; $i++) {
                            print '<tr>';
                            foreach ($geothermal as $geothermals) {
                                print '<td>' . $geothermals[$i] . '</td>';
                            }
                            print '</tr>'; 
                        }
                        ?>
                    </table>

                <cite>Source: Statista </cite>
            </section>
            <section class="next"> 
                <h2>
                    More about geothermal energy
                </h2>
            </section>
        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>