<html>
    <head>
        <title>GOLF TEAM</title>
        <style>

            a{
                border: solid 1px blue:
                background-color: lightblue;
                color: blue;
                padding:5px;
                text-decorations: none;
                width: 200px;
            }

            .selected{
                border: solid 1px lightblue;
                background-color:blue;
                color:lightblue;
            }
        </style>
    </head>

    <body>
        <h1>Hanover high school golf team</h1>

        <?php
           extracts($_REQUEST);

            if(!isset($nav))
            {
                $nav = "Home";
            }
        ?>

        <a href ="club.php?nav=home" <?php if($nav=='home') print('class="selected'); ?>>HOME</a>
        <a href ="club.php?nav=schedule" <?php if($nav=='schedule') print('class="selected')?>>Schedule</a>
        <a href ="club.php?nav=roster" <?php if($nav=='roster') print('class="selected')?>>Roster</a>
        <a href ="club.php?nav=media" <?php if($nav=='media') print('class="selected')?>>Media</a>

        <br><br><br>
        <?php include("club-$nav.php");?>
    </body>
</html>