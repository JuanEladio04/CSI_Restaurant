<?php 
include("../includes/a_config.php"); 
require_once('../controller/sessionController.php');
?>
<!-- Including configuration file -->

<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>
    

    <section class="container-fluid bg-primary text-center my-5">
        <article class="bg-danger row">
            <h1 class="p-5 text-light">
                ¡Bienvenidos a nuestra sección de minijuegos! Aquí encontrarás todo lo que necesitas para sumergirte en
                mundos virtuales. Deleitate con los los diferentes minijuegos clásicos de los que disponemos en nuestra
                página.
            </h1>
        </article>

        <article class="row justify-content-around">

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top pt-2" src="../img/games/arkanoidImage.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Pizzanoid</h5>
                    <div class="card-text">
                        <p>
                        "Pizzanoid" es un emocionante juego de estilo arcade inspirado en el clásico juego de romper ladrillos, pero con un toque único y delicioso. El objetivo principal del juego es destruir todos los ladrillos en la pantalla utilizando una pelota especial de pizza, mientras te defiendes con una nave espacial que funciona como paleta.
                        </p>
                    </div>
                    <div class="mt-auto">
                        <a href="games/Arkanoid/arkanoid.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                    </div>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top pt-2" src="../img/games/PizzaInvader.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Pizza Invader</h5>
                    <div class="card-text">
                        <p>Pizza Invader es una emocionante fusión entre el clásico Space Invaders y la
                        irresistible cocina italiana. En este juego, tu nave toma la forma de una apetitosa boca ávida
                        de pizza. En lugar de disparar, tu misión es devorar pizzas que se desplazan en formación,
                        imitando el icónico estilo de los aliens en Space Invaders.</p>

                        <p>Los aliens son representados por deliciosas porciones de pizza que descienden en patrones
                        desafiantes. A medida que avanzas, la velocidad y la complejidad aumentan, creando una
                        experiencia de juego emocionante y hambrienta.</p>

                        <p>Utiliza la boca-nave para esquivar los obstáculos culinarios, como salsas y queso derretido,
                        mientras te embarcas en esta misión gastronómica. Cada pizza devorada te acerca a la victoria, y
                        los niveles culminan en encuentros épicos con jefes finales que son representaciones
                        extravagantes de platillos gourmet italianos.</p>

                        <p>Con gráficos vibrantes y efectos sonoros apetitosos, "Pizza Invader" ofrece una experiencia
                        única que celebra la fusión entre la diversión del juego clásico y la delicia de la pizza
                        italiana.</p>

                        <p>¡Prepárate para disfrutar de una experiencia de juego sabrosa y divertida con Pizza Invader
                        mientras te conviertes en el defensor de la cocina italiana!</p>
                    </div>
                    <div class="mt-auto">
                        <a href="games\PizzaInvader\pizzaInvader.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                    </div> 
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top pt-2" src="../img/games/PizzaCraft.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">PizzzaCraft</h5>
                    <div class="card-text">
                        <p>Sumérgete en el delicioso mundo de PizzzaCraft, donde tu creatividad culinaria se une a la 
                            emoción de calcular el precio perfecto para tu obra maestra pizza. En este juego único, eres 
                            el chef y el contador, tomando decisiones que afectan tanto el sabor como el costo de cada 
                            pizza.
                        </p>
                        
                        <p>Cada ingrediente que elijas, desde la frescura de los tomates hasta la exquisitez del queso, 
                            influirá en el sabor final de tu creación. ¡Pero cuidado! Cada elección también afectará el 
                            precio final que tus clientes estarán dispuestos a pagar.
                        </p>
                        
                        <p>
                        Equilibra tus habilidades culinarias con la gestión financiera mientras intentas crear la pizza 
                        perfecta que deleitará a los paladares y llenará tus arcas. Experimenta con combinaciones únicas, 
                        mejora tus ingredientes y descubre la fórmula secreta para la pizza más sabrosa y rentable.
                        </p>

                        <p>
                        Con gráficos vibrantes y una experiencia de juego adictiva, "PizzzaCraft" te desafía a convertirte 
                        en el maestro de la pizza, donde cada creación es una obra de arte que cuenta una historia de sabor 
                        y éxito financiero. ¡Prepárate para una experiencia gastronómica única! 
                        </p>
                    </div>
                    <div class="mt-auto">
                        <a href="games/pizzacrafter/pizzacrafter.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                    </div>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top pt-2" src="../img/games/reservacrafter.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Reserva Crafter</h5>
                    <div class="card-text">
                        <p>
                        Bienvenido a Reserva Crafter, la experiencia de reserva de mesas diseñada exclusivamente para el 
                        encantador Ristorante Luna Della Rosa. En este juego, te sumergirás en la atmósfera mágica de nuestra 
                        auténtica cocina italiana.
                        </p>

                        <p>
                        Explora la elegancia de Luna Della Rosa mientras reservas tu rincón especial para una experiencia 
                        culinaria única. Desde mesas con vistas panorámicas hasta rincones íntimos bajo la luz de la luna, 
                        cada elección de reserva forma parte de tu viaje gastronómico.
                        </p>

                        <p>
                        Descubre la variedad de opciones, desde cenas románticas hasta reuniones familiares festivas. Personaliza 
                        tu reserva con detalles especiales y experimenta la autenticidad de la hospitalidad italiana desde la 
                        comodidad de tu dispositivo.
                        </p>

                        <p>
                        Gestiona tu tiempo y disfruta de la conveniencia de asegurar tu lugar en nuestro rincón de delicias 
                        italianas. ¡Prepárate para una experiencia de reserva que celebra la belleza y la exquisitez de Luna 
                        Della Rosa! 
                        </p>
                    </div>
                    <div class="mt-auto">
                        <a href="games/ReservaCrafter/reservacrafter.html" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                    </div>
                </div>
            </div>

        </article>

    </section>
    
    <script src="../js/cardGame.js"></script>

    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/cookies.php"); ?>
</body>

</html>