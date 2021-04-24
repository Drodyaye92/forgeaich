<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/liste.css">
    <title>Document</title>
</head>

<body>
    <?php
        $dat = new mysqli("localhost", "root", "", "liste");
    ?>
    <div class="form">
        <form action="" method="POST">
            <input type="text" name="search" placeholder="Rechercher">
            <button type="submit" name="submit" value="submit">Rechercher</button>
        </form>
    </div>
    <div class="main">
            <h3>Developpement Web et Web Mobile</h3>
        <?php

        ?>

        <?php
             $ret_dev = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='DEV'");
             if (empty($_POST["submit"])) {
             $ret_dev = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='DEV'");
             while ($data = $ret_dev->fetch_array()) {
                echo ("<table  class=tablebody>");
                echo ("<tbody>
        <td>
            <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
            <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["mail"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["sexe"] . "</h6>
       </td>" . "</tbody>");
                echo ("</table>");
            }
        } else {
            $ret_dev = $dat->query("SELECT * FROM `apprenants` WHERE  `formation`='DEV' AND LOCATE ('{$_POST['search']}', `name`)>=0");
            while ($data = $ret_dev->fetch_array()) {
                echo ("<table  class=tablebody>");
                echo ("<tbody>
        <td>
            <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
            <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["mail"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["sexe"] . "</h6>
       </td>" . "</tbody>");
                echo ("</table>");
            }
        }
        ?>

    </div>
    <div class="main">
        <h3>Referencement Digital</h3>
        <?php
        $ret_ref = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='REF'");
        ?>

        <?php
        while ($data = $ret_ref->fetch_array()) {
            echo ("<table  class=tablebody>");
            echo ("<tbody>
        <td>
            <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
            <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["mail"] . "</h6>
       </td>" . "<td>
            <h6>" . $data["sexe"] . "</h6>
       </td>" . "</tbody>");
            echo ("</table>");
        }
        ?>
    </div>
    <script src="script/liste.js"></script>
</body>

</html>