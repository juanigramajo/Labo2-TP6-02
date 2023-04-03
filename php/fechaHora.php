
<?php
    function fechaHora(){

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fecha = date('d/m/Y');
        $hora = date('H:i:s');
        $fechaHora = $fecha. ' - '. $hora;

        return $fechaHora;
    }


?>