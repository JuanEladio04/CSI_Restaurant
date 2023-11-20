<?php include("../includes/a_config.php"); ?>
<!-- Including configuration file -->

<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <!-- Including head tago contents -->
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <!-- Including navigation bar -->
    <?php include("../includes/design-top.php"); ?>
    <!-- Including superior design file -->

    <div class="container">

        <section class="row mb-5 bg-info roundedBorder">
            <article class="articulo col p-5">
                <!-- Section with welcome message -->
                <p class="mt-2">Bienvenido al restaurante Lunna Di La Rosa. Antes de explorar nuestras deliciosas
                    ofertas en línea, te pedimos que revises detenidamente los siguientes términos y condiciones que
                    rigen el uso de este sitio. Al acceder y utilizar nuestro sitio web, aceptas cumplir con estos
                    términos y condiciones. Si no estás de acuerdo con alguna parte de estos términos, te recomendamos
                    que no utilices nuestro sitio.</p>
            </article>
        </section>


        <section id="legalWarn" class="row mb-5 bg-info roundedBorder margin">
            <article class="articulo col p-5">
                <!-- Section with the legal advice -->
                <h1 class="text-center">Aviso Legal</h1>
                <p class="mt-5">El Usuario se compromete a utilizar el Sitio Web de conformidad con la ley y con las
                    presentes Condiciones Generales. La simple y mera utilización de la Página otorga la condición de
                    usuario de la Página, y obligatoriamente implica la aceptación completa, plena y sin reservas de
                    todas y cada una de las cláusulas y condiciones generales incluidas en el Aviso Legal. Al utilizar
                    el Sitio Web y los servicios, el Usuario manifiesta su conformidad con estas Condiciones Generales.
                    El Titular se reserva la facultad, en todo momento y sin necesidad de previo aviso, de efectuar
                    modificaciones y actualizaciones de la información contenida en su web, en la configuración y
                    presentación de ésta y en el presente Aviso Legal. Por tanto, el Usuario debe leer el Aviso Legal en
                    todas y cada una de las ocasiones en que acceda al Sitio Web.</p>
            </article>
        </section>


        <section id="privPol" class="row mb-5 bg-info roundedBorder margin">
            <article class="articulo col p-5">
                <!-- Section with the politics privacy -->
                <h1 class="text-center">Política de Privacidad</h1>
                <p class="mt-5">La presente Política de Privacidad establece los términos en que se utiliza y protege la
                    información proporcionada por sus usuarios al utilizar su sitio web. Esta compañía está comprometida
                    con la seguridad de los datos de sus usuarios. Cuando solicitamos que completes campos de
                    información personal con los cuales puedas ser identificado, lo hacemos asegurando que solo se
                    utilizará de acuerdo con los términos de este documento. Sin embargo, esta Política de Privacidad
                    puede cambiar con el tiempo o ser actualizada, por lo que recomendamos y enfatizamos revisar
                    continuamente esta página para asegurarse de estar de acuerdo con dichos cambios.</p>
            </article>
        </section>


        <section class="row mb-5 bg-secondary roundedBorder margin">
            <!-- Section with the purpose of various activities -->
            <article class="articuloTC col">
                <h1 class="text-center">Finalidad</h1>
            </article>
            <article class="articuloTC">
                <h2 class="text-center mt-5">1. Compromiso con su Seguridad</h2>
                <p class="text-center">Todos sus datos están seguros en nuestro sitio web. En el restaurante Lunna Di La
                    Rosa, nos comprometemos a mantener la seguridad de los datos de nuestros clientes.</p>
            </article>
            <article class="articuloTC">
                <h2 class="text-center mt-5">2. Prestación de Servicios a Clientes y/o Actuales</h2>
                <p class="text-center">En nuestro servicio, nos comprometemos a prestar los mejores servicios para
                    nuestros clientes. Tus experiencias aquí nos importan. Por lo tanto, intentaremos darte el mejor
                    trato posible con nuestro experimentado personal de servicio.</p>
            </article>
            <article class="articuloTC">
                <h2 class="text-center mt-5">3. Recursos Humanos</h2>
                <p class="text-center">¿Has tenido algún problema en nuestro restaurante? Disponemos de una sección de
                    recursos humanos donde puedes presentar una queja sobre cualquier inconveniente que hayas tenido en
                    nuestro establecimiento con respecto a nuestra comida y/o personal.</p>
            </article>
            <article class="articuloTC">
                <h2 class="text-center mt-5">4. Proveedores y Terceros</h2>
                <p class="text-center mb-5">En Lunna Di La Rossa, contamos con los mejores productos exportados por los
                    principales proveedores de la industria. Nuestros productos son de la más alta calidad y, en este
                    restaurante, se conservan en las mejores condiciones.</p>
            </article>
        </section>
    </div>
    <?php include("../includes/footer.php"); ?>

</body>

</html>