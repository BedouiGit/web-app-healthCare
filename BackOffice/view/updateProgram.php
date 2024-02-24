<?php

include '../Controller/programmeC.php';

$error = "";

// create programme
$programme = null;

// create an instance of the controller
$programmeC = new programmeC();
if (
    isset($_POST["idp"]) &&
    isset($_POST["objectif"]) &&
    isset($_POST["idExercice"]) 

) {
    if (
        !empty($_POST["idp"]) &&
        !empty($_POST['objectif']) &&
        !empty($_POST["idExercice"]) 
        
    ) {
        $programme = new programme(
            $_POST['idp'],
            $_POST['objectif'],
            $_POST['idExercice']
           
        );
        $programmeC->updateProgram($programme, $_POST["idp"]);
        header('Location:ListProgram.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="ListProgram.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idp'])) {
        $programme = $programmeC->showProgram($_POST['idp']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idp">ID Program:
                        </label>
                    </td>
                    <td><input type="text" name="idp" id="idp" value="<?php echo $programme['idp']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="objectif">objectif:
                        </label>
                    </td>
                    <td><input type="text" name="objectif" id="objectif" value="<?php echo $programme['objectif']; ?>" maxlength="50"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idExercice">ID Exercice:
                        </label>
                    </td>
                    <td><input type="text" name="idExercice" id="idExercice" value="<?php echo $programme['idExercice']; ?>" maxlength="20"></td>
                </tr>
                
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>