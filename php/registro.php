<?php
    $ruta = '../css';
    require_once("../html/head.html");
    echo '<main>';
?>


    <article id="speech">

        <?php
            if (!empty($_POST['DNI'])) {

                $DNI = trim($_POST['DNI']);
                
                if (($DNI > 10000000) && ($DNI <= 57000000)) {
                    
                    $nombreArchivo = '../txt/alumnos.txt';
                    $archivo = fopen ($nombreArchivo, 'r');
                    $login = false;

                    while (!feof($archivo) && $login == false) {
                        $linea = fgets($archivo);

                        if ($linea != '') {
                            $alumno = explode(';', $linea);
                        }

                        $dniFile = trim($alumno[0]);
                        $nombreFile = trim($alumno[1]);
                        $carreraFile = trim($alumno[2]);

                        if ($DNI == $dniFile) {
                            $login = true;
                            require_once('speech.php');
                        }
                    }

                    if ($login == false) {
                        echo '<p>No encontramos un DNI similar, ingrese otro...</p>';
                        header('refresh:3; url=../index.php');
                    }
                    
                } else {
                    echo '<p>Ingrese un DNI válido</p>';
                    header('refresh:3; url=../index.php');
                }
                
            } else {
                echo '<p>Ingrese un DNI</p>';
                header('refresh:3; url=../index.php');
            }
        ?>

    </article>


    
<?php
    echo '</main>';

    require_once('../html/footer.html');
?>

