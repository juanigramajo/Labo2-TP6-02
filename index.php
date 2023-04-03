<?php
    $ruta = 'css';
    require_once ('html/head.html');
?>

    <header>
        <img src="img/logo-facet.png" alt="Logo Facet" title="Logo Facet">
        <h1>Facultad de Ciencias Exáctas y Tecnología</h1> 
    </header>
    
    <main>
        <h2>Constancia de alumno regular</h2>
        <form action="php/registro.php" method="POST" enctype="multipart/form-data">
        
            <section>
                <label for="DNI">DNI:</label>
                <input class="inputs" type="text" id="DNI" name="DNI" placeholder="Ingrese su DNI">
            </section>

            <input type="submit" class="inputs" value="Imprimir" id="buttonSubmit"> 

        </form>
    </main>
    


<?php 
    require_once ('html/footer.html');
?>