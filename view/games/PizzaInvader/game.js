// **************************** LOBBY ************************************** //
var lobby = new Konva.Stage({
    container: 'lobby-container',
    width: window.innerWidth * 0.60,
    height: window.innerHeight * 0.60,
});

var button = new Konva.Layer();
lobby.add(button);

// Crear el botón con Konva
var botonStart = new Image();
botonStart.src = 'assets/botonStart.png';

var botonIniciar = new Konva.Image({
    x: (lobby.width() - 500) / 2,
    y: lobby.height() - 200,
    width: 500,
    height: 100,
    image: botonStart
});

// Agregar el botón a la capa
button.add(botonIniciar);
lobby.draw();

var botonExit = new Image();
botonExit.src = 'assets/botonExit.png';

var botonEx = new Konva.Image({
    x: (lobby.width() - 400) / 2,
    y: lobby.height() - 120,
    width: 500,
    height: 100,
    cornerRadius: 20,
    image: botonExit
});

// Agregar el botón a la capa
button.add(botonEx);
lobby.draw();

botonEx.on('click', function () {
    salir();
});

// Manejar el evento de clic en el botón
botonIniciar.on('click', function () {
    iniciarJuego();
});

// Añadimos las imagenes
var alienImage = new Image();
alienImage.src = 'assets/alien.png';

var pizzaImage = new Image();
// pizzaImage.src = 'assets/pizza.png';
pizzaImage.src = 'assets/pizza2.png';

var playerImage = new Image();
playerImage.src = 'assets/player.png';

var botonReplay = new Image();
botonReplay.src = 'assets/botonReplay.png';

var pelo = new Image();
pelo.src = 'assets/superSaiyan.png';

var playerImageSuperSaiyan = new Image();
playerImageSuperSaiyan.src = 'assets/BocaSuperSaiyan.png';




// **************************** LOBBY ************************************** //



var score = 0; // Puntuacion del player

function iniciarJuego() {
    document.getElementById("lobby-container").style.display = "none";
    document.getElementById("game-container").style.display = "block";
    document.getElementById("game-over").style.display = "none";

    // **************************** CREAR ESCENARIO **************************** //
    var stage = new Konva.Stage({
        container: 'game-container',
        width: window.innerWidth * 0.60,
        height: window.innerHeight * 0.60,
    });


    // **************************** CREAR ESCENARIO **************************** //



    // **************************** PUNTUACION ********************************* //
    var num = 70

    var cuadroTexto = new Konva.Layer();

    var marcador = new Konva.Group({
        x: 50,
        y: 50,
        draggable: true
    });

    // Crear el rectángulo
    var fondo = new Konva.Rect({
        width: 140,
        height: 90,
        fill: 'rgba(255, 165, 0, 0.5)',
        cornerRadius: 10 // Añadir esquinas redondeadas
    });

    var vidas = 1; // Número inicial de vidas del player

    // Crear el texto
    var texto = new Konva.Text({
        text: `Puntuacion: ${score} \n \n Vidas: ${vidas}`,
        fontSize: 18,
        fontFamily: 'Arial',
        fill: 'white',
        width: fondo.width(),
        align: 'center'
    });

    // Calcular la posición vertical del texto para centrarlo
    var textVertical = (fondo.height() - texto.height()) / 2;
    texto.y(textVertical);

    // Añadir el rectángulo y el texto al grupo
    marcador.add(fondo);
    marcador.add(texto);

    // Añadir el grupo a la capa
    cuadroTexto.add(marcador);

    // Añadir la capa al escenario
    stage.add(cuadroTexto);

    // Definir límites del contenedor
    var containerRect = {
        x: 0,
        y: 0,
        width: stage.width(),
        height: stage.height(),
    };

    // Escuchar el evento de arrastre
    marcador.on('dragmove', function () {
        var marcx = marcador.x();
        var marcy = marcador.y();

        // Verificar los límites del contenedor
        if (
            marcx < containerRect.x ||
            marcy < containerRect.y ||
            marcx + marcador.width() > containerRect.x + containerRect.width ||
            marcy + marcador.height() > containerRect.y + containerRect.height
        ) {
            // Restringir la posición si está fuera de los límites
            marcador.position({
                x: 50,
                y: 50,
            });
        }
        cuadroTexto.batchDraw(); // Asi mejoramos el rendimiento al renderizar multiples cambios
    });

    // **************************** PUNTUACION ********************************* //



    // **************************** JUGADOR ************************************ //
    var gameLayer = new Konva.Layer();
    stage.add(gameLayer);

    // CREAR JUGADOR
    var player = new Konva.Image({
        x: stage.width() / 2,
        y: stage.height() / 2,
        width: 50,
        height: 50,
        draggable: false,
        image: playerImage
    });
    gameLayer.add(player);

    // Variables de configuración
    var velocidadMaxima = 400; // Puedes ajustar según tus necesidades
    const desaceleracion = 0.2;
    const framerate = 165; // Frames por segundo
    var velocidad = 500000; // Esta es la velocidad en la que aparecen los aliens por pantalla
    var derecha = false;
    var izquierda = false;
    var arriba = false;
    var abajo = false

    // Estado del jugador
    let playerEstado = {
        x: player.x(),
        y: player.y(),
        velocidadX: 0,
        velocidadY: 0
    };

    // **************************** JUGADOR ************************************ //



    // **************************** PIZZAS ************************************* //
    // Capa para los rectángulos
    var layerPizza = new Konva.Layer();
    stage.add(layerPizza); // Agrega la capa al escenario

    // Función para crear un rectángulo en una posición aleatoria en la parte inferior
    function createPizza() {
        var radioPizza = 25; //Radio del triangulo
        var xPizza = Math.random() * (stage.width() - radioPizza * 2) + radioPizza;
        var yPizza = stage.height() - radioPizza;

        var Pizza = new Konva.Image({
            x: xPizza,
            y: yPizza,
            sides: 3, // Número de lados (triángulo)
            radius: radioPizza,
            image: pizzaImage
        });

        layerPizza.add(Pizza);

        // Animación para mover el rectángulo hacia arriba
        var animation = new Konva.Animation(function (frame) {
            Pizza.y(Pizza.y() - 2); // Ajusta la velocidad de movimiento aquí
            if (Pizza.y() + Pizza.height() < 0) {
                Pizza.destroy(); // Elimina el rectángulo cuando supera la parte superior
                animation.stop(); // Detiene la animación
            }
        }, layerPizza);

        animation.start();
    }

    // **************************** PIZZAS ************************************* //



    // *************************** ALIENS ************************************* //
    // Capa para los items

    var layerAliens = new Konva.Layer();
    stage.add(layerAliens); // Agrega la capa al escenario

    // Función para crear un item en una posición aleatoria en la parte superior
    function createAliens() {
        var alienWidth = 40;
        var alienHeight = 40;
        var alienX = Math.random() * (stage.width() - alienWidth);
        var alienY = 0; // Cambiado a 0 para iniciar desde la parte superior

        var Aliens = new Konva.Image({
            x: alienX,
            y: alienY,
            width: alienWidth,
            height: alienHeight,
            image: alienImage
        });

        layerAliens.add(Aliens);

        // Animación para mover el item hacia abajo
        var animation = new Konva.Animation(function (frame) {
            Aliens.y(Aliens.y() + 2); // Ajusta la velocidad de movimiento aquí
            if (Aliens.y() > stage.height()) {
                Aliens.destroy(); // Elimina el item cuando supera la parte inferior
                animation.stop(); // Detiene la animación
            }
        }, layerAliens);

        animation.start();
    }

    // *************************** ALIENS ************************************* //



    // *************************** SUPER SAIYAN ****************************** //
    var layerpowerUp = new Konva.Layer();
    stage.add(layerpowerUp); // Agrega la capa al escenario

    function powerUp() {
        var supeS = new Konva.Image({
            image: pelo,
            width: 50,
            height: 50,
            x: 0,
            y: Math.random() * (stage.height() - 50)
        });

        layerpowerUp.add(supeS);

        // Animación de movimiento de izquierda a derecha
        var animation = new Konva.Animation(function (frame) {
            var speed = 200; // Ajusta la velocidad según sea necesario
            var newX = (supeS.x() + speed * frame.timeDiff / 1000) % stage.width();
            supeS.x(newX);

            // Verificar si la imagen ha salido del límite derecho del div
            if (newX < 0) {
                // Eliminar la imagen
                supeS.destroy();
                // Detener la animación para evitar errores
                animation.stop();
            }
        }, layerpowerUp);

        animation.start();
    }

    // *************************** SUPER SAIYAN ****************************** //



    // **************************** EVENTOS DE MOVIMIENTOS ******************** //
    // Función para manejar el evento de tecla presionada
    window.addEventListener('keydown', function (e) {

        switch (e.code) {
            // MOVIMIENTO A LA IZQUIERDA
            case 'ArrowLeft':
            case 'KeyA':
                izquierda = true;
                break;

                // MOVIMIENTO A LA DERECHA
            case 'ArrowRight':
            case 'KeyD':
                derecha = true;
                break;

                // MOVIMIENTO ARRIBA
            case 'ArrowUp':
            case 'KeyW':
                arriba = true
                break;

                // MOVIMIENTO ABAJO
            case 'ArrowDown':
            case 'KeyS':
                abajo = true;
                break;

            default:
                break;
        }

    });

    // Función para manejar el evento de tecla liberada
    window.addEventListener('keyup', function (e) {
        switch (e.code) {
            // Detener el movimiento cuando se libera la tecla correspondiente
            case 'ArrowLeft':
            case 'KeyA':
                izquierda = false;
                break;
            case 'ArrowRight':
            case 'KeyD':
                derecha = false;
                break;

            case 'ArrowUp':
            case 'KeyW':
                arriba = false;
                break;
            case 'ArrowDown':
            case 'KeyS':
                abajo = false;
                break;

            default:
                break;
        }
    });

    // FUNCION DE MOVIMIENTOS
    function movimientoPlayer() {
        // Obtener las coordenadas
        const iz = 20;
        const ar = 20;
        const de = stage.width() - num;
        const ab = stage.height() - num;




        // MOVIMIENTO IZQUIERDA
        if (izquierda && iz < player.x()) {
            playerEstado.velocidadX = -velocidadMaxima;
        };

        // MOVIMIENTO DERECHA
        if (derecha && de > player.x()) {
            playerEstado.velocidadX = velocidadMaxima;
        };

        // MOVIMIENTO ARRIBA
        if (arriba && ar < player.y()) {
            playerEstado.velocidadY = -velocidadMaxima;
        };

        // MOVIMIENTO ABAJO
        if (abajo && ab > player.y()) {
            playerEstado.velocidadY = velocidadMaxima;
        }

        // Aplicar aceleración/desaceleración
        playerEstado.velocidadX *= (1 - desaceleracion);
        playerEstado.velocidadY *= (1 - desaceleracion);

        // Actualizar la posición del jugador usando interpolación lineal (lerp)
        playerEstado.x = lerp(playerEstado.x, playerEstado.x + playerEstado.velocidadX, 1 / framerate);
        playerEstado.y = lerp(playerEstado.y, playerEstado.y + playerEstado.velocidadY, 1 / framerate);

        // Renderizar o actualizar la posición visual del jugador en tu juego
        player.x(playerEstado.x);
        player.y(playerEstado.y);
    }

    // **************************** EVENTOS DE MOVIMIENTOS ********************* //



    // **************************** COLISIONES ********************************* //
    // Función para detectar colisiones entre el jugador y un alien 
    function detectCollisionPlayer(object) {
        var playerX = player.x();
        var playerY = player.y();
        var playerRadius = player.width() / 2; // Considerando que el jugador es un círculo inscrito en el cuadrado

        return (
            object.x() < playerX + playerRadius &&
            object.x() + object.width() > playerX - playerRadius &&
            object.y() < playerY + playerRadius &&
            object.y() + object.height() > playerY - playerRadius
        );
    }

    function detectarColisionPizzaAlien(alien, pizza) {
        var alienX = alien.x();
        var alienY = alien.y();
        var alienWidth = alien.width();
        var alienHeight = alien.height();

        var pizzaX = pizza.x();
        var pizzaY = pizza.y();
        var pizzaWidth = pizza.width();
        var pizzaHeight = pizza.height();

        return (
            alienX < pizzaX + pizzaWidth &&
            alienX + alienWidth > pizzaX &&
            alienY < pizzaY + pizzaHeight &&
            alienY + alienHeight > pizzaY
        );
    }

    // **************************** COLISIONES ********************************* //



    // **************************** ACTUALIZACION DEL JUEGO ******************** //
    function gameLoop() {
        // MOVIMIENTO DEL JUGADOR
        movimientoPlayer();

        // COLISIONES PLAYER Y ALIEN
        var aliens = layerAliens.children; // Obtén la lista de hijos de los Aliens
        aliens.forEach(function (alien) {
            if (detectCollisionPlayer(alien)) {
                vidas--;
                texto.text(`Puntuacion: ${score} \n \n Vidas: ${vidas}`);
                alien.destroy();
                alien.remove();

                if (vidas == 0) {
                    player.destroy();
                    player.remove();
                    mostrarGameOver();
                }
            }
        });

        // COLISIONES PLAYER Y POWER UP
        var powers = layerpowerUp.children; // Obtén la lista de hijos de los Aliens
        powers.forEach(function (power) {
            if (detectCollisionPlayer(power)) {
                power.destroy();
                power.remove();

                cambiarTamañoVelocidad();
            }
        });

        // COLISIONES ALIEN Y POWER UP
        aliens.forEach(function (alien) {
            powers.forEach(function (power) {
                if (detectarColisionPizzaAlien(alien, power)) {
                    power.remove();

                    //Cambiar velocidad
                    velocidadMaxima = 100;

                    // Volver a la velocidad
                    setTimeout(function () {
                        // Restaurar la velocidad original
                        velocidadMaxima = 400;
                    }, 10000);  
                }
            });
        });

        // COLISIONES PLAYER Y PIZZAS
        var Pizzas = layerPizza.children; // Obtén la lista de hijos de las Pizzas
        Pizzas.forEach(function (pizza) {
            if (detectCollisionPlayer(pizza)) {
                pizza.remove();
                var sumar = 20;
                score += sumar;
                texto.text(`Puntuacion: ${score} \n \n Vidas: ${vidas}`);
                if (score >= 100) {
                    velocidad = 400000;
                    cambiarVelocidad(velocidad);
                }
                if (score >= 1000) {
                    // Calcular la posición vertical del texto para centrarlo
                    var textVertical = (fondo.height() - texto.height()) / 2;
                    texto.y(textVertical);
                    velocidad = 300000;
                    cambiarVelocidad(velocidad);

                }
                if (score >= 5000) {
                    velocidad = 200000;
                    cambiarVelocidad(velocidad);
                }
                if (score >= 10000) {
                    velocidad = 100000;
                    cambiarVelocidad(velocidad);
                }
                if (score >= 15000) {
                    velocidad = 50000;
                    cambiarVelocidad(velocidad);
                }
            }
        });

        // COLISIONES ALIEN Y PIZZAS
        aliens.forEach(function (alien) {
            Pizzas.forEach(function (pizza) {
                if (detectarColisionPizzaAlien(alien, pizza)) {
                    pizza.remove();
                    score -= 10;
                    texto.text(`Puntuacion: ${score} \n \n Vidas: ${vidas}`);
                }
            });
        });



        // DIBUJA EL ESCENARIO
        stage.draw();
    }

    // Funcion para el powerUp
    function cambiarTamañoVelocidad() {
        // Guardar las propiedades actuales del jugador
        var playerX = player.x();
        var playerY = player.y();
        var playerWidth = player.width();
        var playerHeight = player.height();

        // Cambiar el tamaño del jugador
        player.width(100);
        player.height(100);
        num = 120

        // Cambiar la imagen del jugador
        player.image(playerImageSuperSaiyan);

        //Cambiar velocidad
        velocidadMaxima = 800;

        // Volver al tamaño original y a la imagen original después de 5 segundos
        setTimeout(function () {
            // Restaurar el tamaño original del jugador
            player.width(playerWidth);
            player.height(playerHeight);

            // Restaurar la imagen original del jugador
            player.image(playerImage);

            // Restaurar la velocidad original
            velocidadMaxima = 400;
        }, 10000);
    }

    // Función de interpolación lineal (lerp)
    function lerp(valorInicial, valorFinal, alpha) {
        return valorInicial * (1 - alpha) + valorFinal * alpha;
    }

    // MOVIMIENTO DE LAS PIZZAS
    function pizzas() {
        createPizza();
        layerPizza.draw();
    }

    function aliens() {
        createAliens();
        layerAliens.draw();
    }

    // **************************** ACTUALIZACION DEL JUEGO ******************** //



    // **************************** BUCLES  DEL JUEGO ************************** //
    // Entidades 
    setInterval(pizzas, 500000 / framerate);
    setInterval(powerUp, 3000000 / framerate);

    var intervaloJuego;
    iniciarJuego();

    function iniciarJuego() {
        intervaloJuego = setInterval(aliens, velocidad / framerate);
    }

    // Función para cambiar la velocidad del juego
    function cambiarVelocidad(nuevaVelocidad) {
        // Detener el intervalo actual
        clearInterval(intervaloJuego);

        // Iniciar un nuevo intervalo con la nueva velocidad
        intervaloJuego = setInterval(aliens, nuevaVelocidad / framerate);
    }

    // BUCLE PRINCIPAL
    setInterval(gameLoop, 1000 / framerate);



    // **************************** BUCLES  DEL JUEGO ************************** //
}





// **************************** GAME OVER ********************************** //
function mostrarGameOver() {
    document.getElementById("game-container").style.display = "none";
    document.getElementById("game-over").style.display = "block";

    var game_Over = new Konva.Stage({
        container: 'game-over',
        width: window.innerWidth * 0.60,
        height: window.innerHeight * 0.60,
    });

    var layer = new Konva.Layer();
    game_Over.add(layer);

    // Crear el botónReiniciar con Konva
    var botonReiniciar = new Konva.Image({
        x: (game_Over.width() - 700) / 2,
        y: game_Over.height() - 200,
        width: 700,
        height: 100,
        cornerRadius: 20,
        image: botonReplay
    });

    // Agregar el botónReiniciar a la capa
    layer.add(botonReiniciar);

    // Crear el botónVolver con Konva
    var botonSalir = new Konva.Image({
        x: (game_Over.width() - 400) / 2,
        y: game_Over.height() - 120,
        width: 500,
        height: 100,
        cornerRadius: 20,
        image: botonExit
    });

    // Agregar el botónSalir a la capa
    layer.add(botonSalir);

    // Marcador de la pantalla Game-Over
    var marcador = new Konva.Group({
        x: game_Over.width() / 2 - 200,
        y: 100,
    });

    // Crear el rectángulo del marcador final
    var fondo = new Konva.Rect({
        width: 400,
        height: 60,
        fill: 'rgba(0, 31, 63, 0.9)',
        cornerRadius: 10 // Añadir esquinas redondeadas
    });

    // Crear el texto
    var texto = new Konva.Text({
        text: `Puntuacion: ${score}`,
        fontSize: 24,
        fontFamily: 'Arial',
        fill: 'white',
        width: fondo.width(),
        align: 'center'
    });

    // Calcular la posición vertical del texto para centrarlo
    var textVertical = (fondo.height() - texto.height()) / 2;
    texto.y(textVertical);

    // Añadir el rectángulo y el texto al grupo
    marcador.add(fondo);
    marcador.add(texto);

    // Añadir el grupo a la capa
    layer.add(marcador);


    // Pintar
    game_Over.draw();

    // Manejar el evento de clic en el botón
    botonReiniciar.on('click', function () {
        recargarPagina();
    });

    botonSalir.on('click', function () {
        salir();
    });
}

// Función para recargar la página
function recargarPagina() {
    score = 0;
    iniciarJuego();
}

// Funcion para salir de la página
function salir() {
    window.location.href = "../../games.php";
}

// **************************** GAME OVER ********************************** //