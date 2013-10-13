<?php
    $dbc = mysqli_connect('128.210.171.174', 'sogo', 'dkswogus', 'aliendatabase')
        or die('Error connection to MySQL server.');

    $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
        "how_many, alien_descripiton, what_they_did, fang_spotted, other, email) " .
        "VALUES ('Testfirst', 'TestLast', '3 days ago', '1 day', 'four', 'green with six tentacles', " .
        "'We just talked', 'yes', 'Contact me.', 'test@test.net')";

    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

    mysqli_close($dbc);
?>
