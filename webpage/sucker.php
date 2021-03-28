<?php
    $fName = $_REQUEST["fName"];
    $section = $_REQUEST["section"];
    $credit = $_REQUEST["credit"];
    $radio = $_REQUEST["radio"];
?>

<html>
    <head>
        <title>Buy Your Way to a Better Education!</title>
        <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
    <h2>Give Us Your Money</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <?= $fName ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $section ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= "$credit $radio" ?>
        </dd>


        <?php
            $ud = array($fName, ";", $section, ";", $credit, ";", $radio);

            file_put_contents("userdata.txt",  $ud);
        ?>
    </dl>
    </body>
</html>

