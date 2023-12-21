var stage = new Konva.Stage({
    container: 'arkanoidContainer',
    width: 520,
    height: 780,
});

var layer = new Konva.Layer();
stage.add(layer);

// Creación de la imagen de fondo
var backgroundImage = new Konva.Image({
    width: stage.width(),
    height: stage.height(),
});
var imageObj = new Image();// Cargar la imagen de fondo
imageObj.onload = function () {
    backgroundImage.image(imageObj);
    layer.draw();
};
imageObj.src = 'assets/img/background.png';


var lives = 3; //Contador e inicilización del sistema de vidas
var liveHearts = [];
livesImage = new Image();
livesImage.src = "assets/img/live.png";
for (let i = 1; i <= lives; i++) {
    var liveHeart = new Konva.Image({
        x: stage.width() - 130 + (i - 1) * 40,
        y: 10,
        image: livesImage,
        width: 50,
        height: 30,
    });
    liveHearts[i] = liveHeart;
}

var livesText = new Konva.Text({
    x: stage.width() - 180,
    y: 15,
    text: 'Vidas:',
    fontSize: 18,
    fill: 'white',
});

// Sistema de puntuación

var score = 0;
var multiplicador = 1;
var scoreText = new Konva.Text({
    x: 20,
    y: 15,
    text: 'Puntuación: ' + score,
    fontSize: 18,
    fill: 'white',
});
var multiplicadorText = new Konva.Text({
    x: 20,
    y: 40,
    text: 'Multiplicador: x' + multiplicador,
    fontSize: 18,
    fill: 'white',
});

// -----------------------------------------------Objetos del videojuego--------------------------------------------------------------
class Ship {
    constructor() {
        this.paddleHeight = 40;
        this.paddleWidth = 75;
        this.paddleX = (stage.width() - this.paddleWidth) / 2;
        this.paddleY = stage.height() - 50 - this.paddleHeight;
        this.shipImage = new Image();
        this.shipImage.src = "assets/img/paddle.png";
        this.left = false;
        this.right = false;
    }
}

class Ball {
    constructor(ship) {
        this.ballHeight = 30;
        this.ballWidth = 30;
        this.ballX = ship.paddleX + ship.paddleWidth / 2;
        this.ballY = ship.paddleY - 30;
        this.ballImage = new Image();
        this.ballImage.src = "assets/img/pizzaBall.png";
        this.ballDX = 3;
        this.ballDY = -3;
        this.isMoving = false;
    }
}

class Brick {
    constructor() {
        this.brickHeight = (stage.height() / 100) * 50 / 8;
        this.brickWidth = (stage.height() / 100) * 64 / 7;
        this.brickX = 5;
        this.brickY = 100;
        this.brickImage = new Image();
        this.brickImage.src = "assets/img/low_hp_brick.png";
        this.brickLives = 1;
        this.visible = true;
    }
}

var ship = new Ship(); // Creamos la nave
var ball = new Ball(ship); // Creamos la bola
var bricks = new Array(); // Creamos los diferentes ladrillos

for (let i = 0; i < 7; i++) { // Inicialización de los diferentes ladrillos
    bricks[i] = [];
    for (let j = 0; j < 6; j++) {
        bricks[i][j] = new Brick();
        if (i > 0) {
            bricks[i][j].brickX = bricks[i - 1][0].brickX + bricks[i - 1][0].brickWidth + 2;
        }
        if (j > 0) {
            bricks[i][j].brickY = bricks[i][j - 1].brickY + bricks[i][j - 1].brickHeight + 2;
        }
        // if (Math.round(Math.random()) === 0) {
        if ((j % 2) == 0) {
            bricks[i][j].brickImage.src = "assets/img/up_hp_brick.png";
            bricks[i][j].brickLives = 2;
        }
    }
}

//---------------------------------------------Dibujado de los componentes del juego---------------------------------------------

function draw() {
    layer.removeChildren();
    layer.add(backgroundImage);
    scoreText.text('Puntuación: ' + score); 
    multiplicadorText.text('Multiplicador: x' + multiplicador);  
    layer.add(scoreText);
    layer.add(multiplicadorText);

    drawLives();
    drawBall();
    drawShip();
    drawBricks();
    shipMovement();
    ballMovement();
    layer.batchDraw();
    layer.draw();

    if (isGameWin()) {
        alert("¡Has ganado! Tu puntuación es de: " + score);
        location.reload();
        clearInterval(gameLoop);
    }
}

function drawLives() {
    livesText.text();
    layer.add(livesText);

    for (let i = 1; i <= lives; i++) {
        layer.add(liveHearts[i]);
    }
}

function drawShip() {
    var shipImage = new Konva.Image({
        x: ship.paddleX,
        y: ship.paddleY,
        image: ship.shipImage,
        width: ship.paddleWidth,
        height: ship.paddleHeight,
    });

    layer.add(shipImage);
}

function drawBall() {
    var ballImage = new Konva.Image({
        x: ball.ballX - 13,
        y: ball.ballY - 13,
        image: ball.ballImage,
        width: ball.ballWidth,
        height: ball.ballHeight,
    });

    layer.add(ballImage);
}

function drawBricks() {
    for (let i = 0; i < bricks.length; i++) {
        for (let j = 0; j < bricks[0].length; j++) {
            if (bricks[i][j].visible) {
                var brickRect = new Konva.Image({
                    x: bricks[i][j].brickX,
                    y: bricks[i][j].brickY,
                    image: bricks[i][j].brickImage,
                    width: bricks[i][j].brickWidth,
                    height: bricks[i][j].brickHeight
                });

                layer.add(brickRect);
            }
        }
    }
}

//------------------------------------------------Movimiento de los objetos------------------------------------------------

function shipMovement() {
    if (ship.right && ship.paddleX < stage.width() - ship.paddleWidth) {
        ship.paddleX += 5;
    }
    if (ship.left && ship.paddleX > 0) {
        ship.paddleX -= 5;
    }
}

function ballMovement() {
    if (ball.isMoving) { // Moviemento de la pelota
        ball.ballX += ball.ballDX;
        ball.ballY += ball.ballDY;

        if (ball.ballX + ball.ballDX > stage.width() || ball.ballX + ball.ballDX < 0) { // Colisiones con las paredes el juego
            ball.ballDX = -ball.ballDX;
        }

        if (ball.ballY + ball.ballDY < 0) {
            ball.ballDY = -ball.ballDY;
        } else if (ball.ballY + ball.ballDY > stage.height()) { // Colisiones con la parte baja del juego
            if (lives > 0) {
                multiplicador = 1;
                lives--;
                resetBall();
            } else {
                alert("Has perdido con una puntuación de: " + score);
                location.reload();
                clearInterval(gameLoop);
            }
        }

        if ( // Colisiones con la nave del jugador
            ball.ballY + ball.ballDY > ship.paddleY &&
            ball.ballY + ball.ballDY < ship.paddleY + ship.paddleHeight &&
            ball.ballX > ship.paddleX &&
            ball.ballX < ship.paddleX + ship.paddleWidth
        ) {
            ball.ballDY = -ball.ballDY;
        }

        for (let i = 0; i < bricks.length; i++) { // Colisiones con los ladrillos
            for (let j = 0; j < bricks[0].length; j++) {
                if (
                    ball.ballX + ball.ballDX > bricks[i][j].brickX &&
                    ball.ballX + ball.ballDX < bricks[i][j].brickX + bricks[i][j].brickWidth &&
                    ball.ballY + ball.ballDY > bricks[i][j].brickY &&
                    ball.ballY + ball.ballDY < bricks[i][j].brickY + bricks[i][j].brickHeight
                ) {
                    bricks[i][j].brickLives--;
                    ball.ballDY = -ball.ballDY;
                    score = score + (10 * multiplicador);

                    if (bricks[i][j].brickLives === 0) {
                        bricks[i][j].visible = false;
                        bricks[i][j].brickX = null;
                        bricks[i][j].brickY = null;
                        if (multiplicador < 6) {
                            multiplicador++;
                        }
                    }
                    else if (bricks[i][j].brickLives == 1) {
                        bricks[i][j].brickImage.src = "assets/img/low_hp_brick.png";
                    }
                }
            }
        }
    } else {
        ball.ballX = ship.paddleX + ship.paddleWidth / 2;
        ball.ballY = ship.paddleY - 30;
    }
}

//-------------------------------------------------Funcionalidad------------------------------------------------------------------

function resetBall() { // Restaura los valores por defecto de la pelota
    ball.isMoving = false;
    ball.ballX = ship.paddleX + ship.paddleWidth / 2;
    ball.ballY = ship.paddleY - 30;
    ball.ballDX = 3;
    ball.ballDY = -3;
}

function isGameWin() { // Metodo que nos permite ganar el juego
    let gameWon = true;
    for (let i = 0; i < bricks.length; i++) { // Comprobamos que todos los ladrillos hayan sido destruidos
        for (let j = 0; j < bricks[0].length; j++) {
            if (bricks[i][j].brickLives > 0) {
                gameWon = false;
            }
        }
    }

    return gameWon
}

var gameLoop = setInterval(draw, 10);

//----------------------------------------------------Eventos---------------------------------------------------------

document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowRight') {
        ship.right = true;
    } else if (e.key === 'ArrowLeft') {
        ship.left = true;
    } else if (e.key === ' ') {
        if (!ball.isMoving) {
            ball.isMoving = true;
        }
    }
});

document.addEventListener('keyup', function (e) {
    if (e.key === 'ArrowRight') {
        ship.right = false;
    } else if (e.key === 'ArrowLeft') {
        ship.left = false;
    }
});