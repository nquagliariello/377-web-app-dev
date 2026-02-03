<html>
    <head>
        <title>PHP Lesson 1</title>

    </head>

    <body>
        <h1>PHP Lesson 1</h1>

        <p>this is the php

            <?php 
            $count = 0;
            for($i=0; $i < 10; $i++)
            {
                echo "Hello";
                print("<br>");
                $count++;
            }
            echo $count;
            $firstName = 'Will';
            $lastName = 'Dih';

            $fullName = $firstName .  " "  . $lastName;
            
            echo $fullName;

            echo "<p>" . $fullName . " is in web app dev</p>";

            echo "<p>$fullName is in web app dev</p>";

            // Ech0 "<p> case in-sensitive</p>";

            ?>
        </p>
    </body>
</html>