<?php

include '../Controller/programmeC.php';

$error = "";

// create programme
$programme = null;

// create an instance of the controller
$programmeC = new programmeC();
if (
    isset($_POST["objectif"]) &&
    isset($_POST["idExercice"]) 
    
) {
    if (
        !empty($_POST['objectif']) &&
        !empty($_POST["idExercice"]) 
        
    ) {
        $programme = new programme(
            null,
            $_POST['objectif'],
            $_POST['idExercice']
            
        );
        $programmeC->addProgram($programme);
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
    <a href="ListProgram.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="objectif">objectif:
                    </label>
                </td>
                <td><input type="text" name="objectif" id="objectif" maxlength="50"></td>
            </tr>
            <tr>
                <td>
                    <label for="idExercice">ID Exercice:
                    </label>
                </td>
                <td><input type="text" name="idExercice" id="idExercice" maxlength="20"></td>
            </tr>
            <!-- <tr>
                <td>
                    <label for="address">Address:
                    </label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr> -->
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>