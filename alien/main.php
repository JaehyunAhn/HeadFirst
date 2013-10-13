<html>
    <head>
        <title>Aliens abducted me - report result</title>
    </head>
    <body>
        <h2>Aliens abducted me - report result</h2>
        <?php
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $when_it_happend = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
            $alien_description = $_POST['aliendescription'];
            $fang_spotted = $_POST['fangspotted'];
            $email = $_POST['email'];
            $what_they_did = $_POST['whattheydid'];
            $other = $_POST['other'];

            echo 'Thanks for submitting the form.<br />';
            echo 'You are abducted ' . $when_it_happned;
            echo ' and were gone for ' . $how_long . '<br />';
            echo 'Describe them: ' . $alien_description . '<br />';
            echo 'Was Fang there? ' . $fang_spotted . '<br />';
            echo 'Your email address is ' . $email;

            # this is message for email 
            /*
            $msg = "$name was abducted $when_it_happened and was gone for $how_long.<br/ >" .
                "Number of aliens: $how_many <br/ >" .
                "Alien description: $alien_description <br/ >" .
                "What they did: $what_they_did <br/ >" .
                "Fang spotted: $fang_spotted . <br />" .
                "Other comments: $other";
            $email = $_POST['email'];
            $to = 'dkswogus753@gmail.com';
            $subject = 'Aliens Abducted Me - Abduction report';
            if(mail($to, $subject, $msg, 'From:' . $email)) {
                echo "mail success <br/>";
            }
            else {
                echo "mail fail <br />";
            }*/

            #this is query string
            $dbc = mysqli_connect('128.210.171.174','sogo','dkswogus','aliendatabase')
                or die('Error to connect database');
            $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, ".
                "how_many, alien_descripiton, what_they_did, fang_spotted, other, email) " .
                "VALUES ('$first_name','$last_name','$when_it_happened','$how_long','many','$alien_description', ".
                "'$what_they_did', '$fang_spotted', '$other', '$email')";
            $result = mysqli_query($dbc, $query)
                or die('Error to deliver query');
            mysqli_close($dbc);
        ?>
    </body>
</html>
