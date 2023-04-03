
<?php

    require_once('fechaHora.php');
    $dateFile = fechaHora();

    echo '
            <header>
                <img src="../img/logo-facet.png" alt="Logo Facet" title="Logo Facet">
                <h1>Facultad de Ciencias Exáctas y Tecnología</h1> 
            </header>        

            <h3>
                Constancia de alumno regular
            </h3>


            <hr>


            <p id="fhimpresion">
                <strong>Fecha y hora de impresión: '. $dateFile. '</strong>
            </p>


            <hr>


            <p class="pspeech" id="firstp">
                Por la presente se deja constancia que el/la alumno/a <strong>'. $nombreFile. '</strong> DNI: <strong>'. $dniFile. '</strong> es alumno/a regular de la carrera <strong>'. $carreraFile. '</strong>.
            </p>

            <hr>

            <p class="pspeech">
            Las autoridades de la Facultad de Ciencias Exactas y Tecnología expiden la siguiente constancia para ser presentado donde corresponda.
            </p>


        ';
?>