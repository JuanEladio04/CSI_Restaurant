-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2024 a las 12:55:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `csi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `comentario` varchar(5000) NOT NULL,
  `fecha` bigint(20) NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `rid`, `comentario`, `fecha`, `valoracion`) VALUES
(3, 14, '<p>Una maravilla:</p><ul><li>Buena comida</li><li>Buen servicio</li><li>Muy majos todos 👌</li></ul>', 0, 5),
(4, 15, '<p>Muy bonita la terraza</p>', 0, 4),
(5, 16, '<p>Mu mala la comida</p>', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `descuento` float NOT NULL,
  `fecha` date NOT NULL,
  `tipo` enum('dir','sem','men') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` enum('Entrantes','Postres','Carnes','Ensaladas','Pizzas','Bebidas','Pastas') NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `uid`, `nombre`, `tipo`, `descripcion`, `imagen`, `precio`) VALUES
(1, 1, 'Agua de Cristiano Ronaldo', 'Bebidas', 'Refrescante como la victoria en el campo, el Agua de Cristiano Ronaldo es una explosión de energía con toques de éxito y frescura. ¡Siente el poder del juego en cada sorbo! ', 'img/dish/Bebida/AguaDeCristianoRonaldo.png', 1.95),
(2, 1, 'Bidón de plasma', 'Bebidas', 'Sumérgete en el futuro con el Bidón de Plasma. Una fusión de sabores cósmicos que revitalizan tu energía. ¡Una experiencia que desafía los límites de la sed! ', 'img/dish/Bebida/BidonDePlasma.png 	', 2.5),
(3, 1, 'Cerveza', 'Bebidas', 'Embriágate de la esencia dorada de la alegría: nuestra cerveza, el elixir ancestral que despierta pasiones y celebra la magia en cada sorbo.\"', 'img/dish/Bebida/Cerveza.png 	', 1.99),
(4, 1, 'Champán', 'Bebidas', 'Sumérgete en burbujas de lujo con nuestro champán, un elixir efervescente que desata la celebración con cada brindis, elevando momentos ordinarios a extraordinarios.', 'img/dish/Bebida/Champan.png 	', 4),
(5, 1, 'CocaCola', 'Bebidas', 'Refresca tus sentidos con la chispeante magia de la Coca-Cola, la icónica bebida que despierta alegría en cada sorbo, un elixir de felicidad efervescente.', 'img/dish/Bebida/CocaCola.png 	', 2),
(6, 1, 'Escudo', 'Bebidas', 'Sumérgete en el efervescente escudo de frescura de nuestra bebida única, una explosión de burbujas que defiende tu sed con su refrescante y vibrante esencia.', 'img/dish/Bebida/Escudo.png 	', 3),
(7, 1, 'Sorbete', 'Bebidas', 'Explora la frescura y la dulzura en cada sorbo de nuestro sorbete, un néctar helado que despierta tus sentidos y transporta tu paladar a un mundo de delicias refrescantes.', 'img/dish/Bebida/Sorbete.png 	', 2.2),
(8, 1, 'Vino blanco', 'Bebidas', 'Embárcate en un viaje de elegancia con nuestro vino blanco, una sinfonía de sabores que bailan en cada copa, brindando un festín para los sentidos en cada sorbo.', 'img/dish/Bebida/VinoBlanco.png 	', 2.99),
(9, 1, 'Vodka con Limón', 'Bebidas', 'Siente la intensidad del espíritu en nuestro vodka con limón, una fusión vibrante que despierta tus sentidos con cada trago, transportándote a un mundo de frescura y audaz espirituosidad.', 'img/dish/Bebida/VodkaConLimon.png 	', 3.99),
(10, 1, 'Brochetas de pollo', 'Carnes', 'Explora el festín de sabores en cada brocheta de pollo, una danza exquisita de jugosidad y especias que despiertan tu paladar, llevándote a un viaje culinario inolvidable con cada bocado.', 'img/dish/Carnes/BrocehtasDePollo.png 	', 7.99),
(11, 1, 'Carrillada de ternera con rissoto al Fernando Alonso', 'Carnes', 'Sumérgete en la majestuosidad de nuestra carrillada de ternera, una epopeya culinaria donde la suavidad de la carne se convierte en un deleite digno de los paladares más exigentes. Acompañada por un risotto al estilo Fernando Alonso, cada bocado es una vuelta de sabores que aceleran el corazón.', 'img/dish/Carnes/CarrilladaDeTerneraConRissotoAlFernandoAlonso.png ', 11),
(12, 1, 'Chuletas de cordero a la parrilla', 'Carnes', 'Enfrenta el festín con nuestras chuletas de cordero a la parrilla, un banquete digno de héroes épicos. Cada bocado es una explosión de sabores audaces, donde la carne tierna se convierte en un escudo de delicias asadas, conquistando tu paladar como un valiente guerrero culinario.', 'img/dish/Carnes/ChuletasDeCorderoALaParrilla.png ', 14.99),
(13, 1, 'Entrecot al Fernando Alonso', 'Carnes', 'El entrecot al estilo Fernando Alonso: un festín de velocidad en el paladar. Su jugosidad y la perfección del asado son una carrera hacia el sabor, cada corte es una vuelta triunfal en la pista de la exquisitez culinaria, donde cada bocado es un podio de placer gastronómico.', 'img/dish/Carnes/EntrecotAlFernandoAlonso.png ', 15.99),
(14, 1, 'Parrillada a lo Fernando Alonso', 'Carnes', 'Sumérgete en la emoción de nuestra parrillada al estilo Fernando Alonso, donde la carne se convierte en pura potencia gastronómica. Cada pieza, una explosión de sabor en la pista de la parrilla, desatando una carrera épica hacia el deleite culinario. ¡Acelera tu paladar hacia la victoria!', 'img/dish/Carnes/ParrilladaAlFernandoAlonso.png ', 21.99),
(15, 1, 'Pinchitos de cordero', 'Carnes', 'Pinchitos de cordero: explosión de especias que conquistan el paladar como pequeñas joyas culinarias. Cada bocado, una odisea de sabores que despiertan tus sentidos en un festín épico.', 'img/dish/Carnes/ParrilladaAlFernandoAlonso.png ', 8.99),
(16, 1, 'Pollo al Fernando Alonso', 'Carnes', 'Pollo al Fernando Alonso: una sinfonía de sabores que acelera en el paladar. Jugoso y asado, cada bocado es una vuelta triunfal hacia la gloria culinaria en la pista del deleite.', 'img/dish/Carnes/PolloAlFernandoAlonso.png ', 14.99),
(17, 1, 'Presa Ibérica a lo Fernando Alonso', 'Carnes', 'Textura inigualable y sabor magistral, la presa ibérica al modo Fernando Alonso despierta una carrera épica en cada bocado. Un circuito de placer culinario, donde la carne se convierte en una victoria gloriosa.', 'img/dish/Carnes/PresaIbericaAlFernandoAlonso.png ', 26.99),
(18, 1, 'Solomillo a lo Fernando Alonso', 'Carnes', 'Sabores potentes y textura sublime se fusionan en el solomillo a lo Fernando Alonso. Cada bocado es una vuelta triunfal en el circuito del placer gastronómico, acelerando el deleite en el paladar.', 'img/dish/Carnes/SolomilloALFernandoAlonso.png ', 17.99),
(19, 1, 'Ensalada de Atún Nicoise', 'Ensaladas', 'Explosión mediterránea en cada bocado de la ensalada Nicoise. Atún protagonista, se mezcla con sabores frescos, creando una sinfonía de delicias saludables y sofisticadas.', 'img/dish/Ensaladas/Ensalada_AtunNicoise.png ', 6.99),
(20, 1, 'Ensalada Caprese', 'Ensaladas', 'Armonía en cada hoja: la ensalada Caprese celebra tomate, mozzarella y albahaca en un ballet fresco. Una sinfonía veraniega que deleita con su simplicidad elegante.', 'img/dish/Ensaladas/Ensalada_Caprese.png ', 5.99),
(21, 1, 'Ensalada César', 'Ensaladas', 'La ensalada César, un imperio de sabores: crujientes hojas acariciadas por la cremosidad del aderezo, avivadas con pollo a la parrilla y coronadas por queso parmesano. Una deliciosa conquista para el paladar exigente.', 'img/dish/Ensaladas/Ensalada_Cesar.png ', 9.99),
(22, 1, 'Ensalada de Couscous', 'Ensaladas', 'Explora la frescura y versatilidad del couscous en una ensalada que conjuga granos esponjosos con verduras frescas y hierbas aromáticas. Una experiencia culinaria exquisita que fusiona texturas y sabores.', 'img/dish/Ensaladas/Ensalada_Couscous.png ', 8.99),
(23, 1, 'Ensalada de espinacas con fresas', 'Ensaladas', 'Espinacas frescas y fresas jugosas danzan en esta ensalada vibrante. La armonía de sabores dulces y verdes crea una sinfonía fresca y saludable que eleva cada bocado a una experiencia culinaria inolvidable.', 'img/dish/Ensaladas/Ensalada_EspinacasConFresas.png ', 13.99),
(24, 1, 'Ensalada griega', 'Ensaladas', 'Pepino crujiente, tomate jugoso, y queso feta se entrelazan en la ensalada griega. Aderezada con aceitunas y hierbas frescas, cada bocado es un viaje a las costas del Mediterráneo, una experiencia de frescura y tradición en cada hoja.', 'img/dish/Ensaladas/Ensalada_Griega.png ', 6.99),
(25, 1, 'Ensalada de pollo a la parrilla', 'Ensaladas', 'Hojas crujientes, pollo a la parrilla y verduras frescas componen esta ensalada de deleite. Cada bocado es una sinfonía de sabores, donde la jugosidad del pollo se encuentra con la frescura de los vegetales, creando una experiencia culinaria inolvidable.', 'img/dish/Ensaladas/Ensalada_PolloLaParrilla.png ', 7.99),
(26, 1, 'Ensalada Waldorf', 'Ensaladas', 'Pomelo fresco, manzanas crujientes y nueces tostadas crean la ensalada Waldorf. Una mezcla sublime de dulce y crujiente, cada bocado es una oda a la elegancia culinaria que deleita con su armonía de sabores.', 'img/dish/Ensaladas/Ensalada_Waldorf.png ', 10.99),
(27, 1, 'Antipasto', 'Entrantes', 'El antipasto, un desfile festivo de sabores italianos: embutidos, quesos y vegetales maridan en esta selección generosa. Un banquete donde cada bocado es una entrada a la riqueza culinaria, una experiencia vibrante de la tradición mediterránea.\r\n', 'img/dish/Entrantes/Antipasto.png ', 12.99),
(28, 1, 'Arancini', 'Entrantes', 'Arancini, pequeñas joyas sicilianas: bolas de risotto doradas y crujientes, rellenas de queso fundido y sabor inigualable. Cada bocado es un viaje a la cocina italiana, una explosión de delicias que conquistan el paladar con su exquisita mezcla de texturas y sabores.', 'img/dish/Entrantes/Arancini.png ', 6.99),
(29, 1, 'Bruschetta', 'Entrantes', 'Bruschetta, un deleite toscano: rebanadas de pan crujiente se visten con tomate fresco, albahaca y ajo. Cada bocado es un encuentro fresco y aromático, una oda a la simplicidad italiana que despierta el paladar con su mezcla única de sabores mediterráneos.', 'img/dish/Entrantes/Bruschetta.png ', 4.99),
(30, 1, 'Caprese', 'Entrantes', 'La Caprese, un tributo fresco a Italia: tomate maduro, mozzarella sedosa y albahaca fresca en cada bocado. Una sinfonía simple y armoniosa de sabores mediterráneos que transporta tus sentidos a un rincón soleado de la Toscana.', 'img/dish/Entrantes/Caprese.png ', 4.99),
(31, 1, 'Carpaccio', 'Entrantes', 'Carpaccio: láminas de ternera, rociadas con aceite de oliva y adornadas con parmesano y rúcula. Cada bocado, una oda al refinamiento, una experiencia épica que desata sabores intensos como una obra maestra en el lienzo de la gastronomía.', 'img/dish/Entrantes/Carpaccio.png ', 3.99),
(32, 1, 'Ensalada de cangrejo', 'Entrantes', 'Ensalada de cangrejo: un festín marino donde la suculencia del cangrejo se abraza con aguacate, pepino y aderezo vibrante. Cada bocado es una oda al océano, una explosión de frescura que eleva el paladar a las profundidades de la exquisitez.', 'img/dish/Entrantes/EnsaladaDeCangrejo.png ', 5.99),
(33, 1, 'Fritura de Calamardo', 'Entrantes', 'Crujiente fritura de calamardo: anillos dorados de océano en cada bocado. Una sinfonía marina que despierta el paladar con su textura crujiente y sabores intensos, una epopeya de delicias que sumerge tus sentidos en las profundidades culinarias.', 'img/dish/Entrantes/FrituraDeCalamardo.png ', 5.99),
(34, 1, 'Lentejas a lo Fernando Alonso', 'Entrantes', 'Las lentejas de Fernando Alonso: un festín celestial que despierta la velocidad en tu boca, un rugido de sabor que conquista cada rincón de tu ser con la potencia de un campeón.', 'img/dish/Entrantes/LentejasDeFernandoAlonso.png ', 33.33),
(35, 1, 'Polenta con toad', 'Entrantes', 'La polenta con toad, una sinfonía épica en cada bocado: la fortaleza de la polenta baila con la delicadeza del toad, creando un banquete legendario que encanta y conquista el paladar con su magia culinaria.', 'img/dish/Entrantes/PolentaconToad.png ', 8.99),
(36, 1, 'Ensalada de quinoa', 'Ensaladas', 'La ensalada de quinoa, un oasis de frescura y virtud en cada hoja. Los granos de quinoa danzan en armonía, creando un festín épico que nutre cuerpo y alma, una explosión saludable que eleva tus sentidos.', 'img/dish/Ensaladas/Ensalada_Quinoa.png ', 8.99),
(37, 1, 'Farfalle con pesto', 'Pastas', 'Farfalle con pesto, el ballet perfecto de mariposas en tu plato. Cada lazo de pasta abraza el pesto como una obra maestra, desatando un torbellino de sabores que transporta tu paladar a una sinfonía italiana, donde cada mordisco es una danza épica de deleite.', 'img/dish/Pastas/FarfalleConPesto.png ', 11.99),
(38, 1, 'Fetuccini Alfredo', 'Pastas', 'Fetuccini Alfredo, un deleite culinario digno de los dioses. Las cintas de pasta se entrelazan en una danza celestial con la cremosa salsa, creando un éxtasis gastronómico que eleva los sentidos a un reino de placer inigualable. Un festín digno de reyes.', 'img/dish/Pastas/FettuccineAlfredo.png ', 6.99),
(39, 1, 'Linguine con mariscos', 'Pastas', 'Linguine con mariscos, un viaje épico a las profundidades del sabor. Las olas de linguine abrazan los tesoros del mar en un banquete majestuoso, donde cada bocado es una odisea de frescura y deleite que conquista el paladar como una epopeya culinaria.', 'img/dish/Pastas/LinguineConMariscos.png ', 8.99),
(40, 1, 'Orecchiette', 'Pastas', 'Orechiette, pequeños tesoros de la gastronomía, moldeados por manos divinas. En cada curva, un secreto ancestral se revela, una sinfonía de texturas que danzan en el paladar como la poesía de un antiguo relato épico, transportándote a un reino donde el arte culinario se fusiona con la magia.', 'img/dish/Pastas/Orecchiette.png ', 9.99),
(41, 1, 'Pasta a lo Doraemon', 'Pastas', 'Pasta a lo Doraemon: un viaje intergaláctico en cada bocado. La magia del gato cósmico eleva la pasta a nuevas alturas, creando una epopeya de sabores que despiertan la maravilla en tu paladar.', 'img/dish/Pastas/PastaALoDoraemon.png ', 30.99),
(42, 1, 'Penne a la Vodka', 'Pastas', 'Penne a la Vodka, un deleite divino de la cocina italiana. Cada penne esculpido como una joya, sumergido en una salsa de vodka que despierta los sentidos. Un banquete épico donde la pasta se convierte en un lienzo y la salsa, en el elixir que eleva el sabor a una experiencia culinaria sin igual.', 'img/dish/Pastas/PenneLaVodka.png ', 8.99),
(43, 1, 'Ravioli de espinacas y ricotta.', 'Pastas', 'Ravioli de espinacas y ricotta, pequeñas joyas rellenas de magia. Cada bocado desvela un universo de sabores, donde la frescura de las espinacas se entrelaza con la suavidad de la ricotta, creando una epopeya culinaria que encanta y conquista el paladar como un cuento de hadas.', 'img/dish/Pastas/RavioliDeEspinacasyRicotta.png ', 11.99),
(44, 1, 'Spaguettis a la boloñesa', 'Pastas', 'Spaguettis a la boloñesa, un épico abrazo de pasta y salsa. La carne sazonada narra una historia de tradición y sabor en cada hebra, un viaje culinario que cautiva el alma en cada tenedorada.', 'img/dish/Pastas/SpaghettiBolognese.png ', 7.99),
(45, 1, 'Tortellini', 'Pastas', 'Tortellini, pequeños tesoros de pasta rellenos. Cada bocado es una odisea de sabores, un festín que despierta el paladar con la magia de la cocina italiana. Una experiencia épica en cada tortellini.', 'img/dish/Pastas/Tortellini.png ', 11.99),
(46, 1, 'Pizza 4 quesos', 'Pizzas', 'Pizza 4 quesos, un colosal encuentro de quesos divinos sobre masa celestial. Cada mordisco desata un torbellino de sabores, una epopeya culinaria que eleva el placer a nuevas alturas. ¡Una oda al queso en cada rebanada!', 'img/dish/Pizza/Pizza_4quesos.png ', 12.99),
(47, 1, 'Pizza barbacoa', 'Pizzas', 'Pizza barbacoa, un festín audaz de sabores ahumados. La masa crujiente sostiene un épico duelo entre el tomate, el queso y la carne asada, creando una sinfonía culinaria que enciende los sentidos con cada bocado.', 'img/dish/Pizza/Pizza_Barbacoa.png ', 12.99),
(48, 1, 'Pizza carbonara', 'Pizzas', 'Pizza carbonara, un viaje culinario al corazón de Italia. La masa acaricia la crema de huevo, el queso, y la panceta en una danza épica. Cada porción es un poema de sabor que eleva la pizza a la grandeza gourmet.', 'img/dish/Pizza/Pizza_Carbonara.png ', 12.99),
(49, 1, 'Pizza Diavola', 'Pizzas', 'Pizza Diavola, un festín de fuego en cada rebanada. La masa se convierte en un escenario para el picante salami y la explosión de sabores, creando una epopeya culinaria que despierta el paladar con la intensidad de un dios del fuego.', 'img/dish/Pizza/Pizza_Diavola.png ', 12.99),
(50, 1, 'Pizza hawaiana.', 'Pizzas', 'Pizza hawaiana, una odisea épica de sabores. La masa se convierte en tierra fértil para la danza celestial de piña y jamón, creando una experiencia gastronómica que transporta tu paladar a una isla de deleite exótico. ¡Una epopeya tropical en cada mordisco!', 'img/dish/Pizza/Pizza_hawaiana.png ', 12.99),
(51, 1, 'Pizza Margarita', 'Pizzas', 'Pizza Margarita, la epopeya clásica de la cocina italiana. La masa es el lienzo, la salsa es el susurro de la tradición y el queso, la coronación. Un viaje épico de simplicidad sublime que reverencia la esencia de la pizza en cada celestial bocado.', 'img/dish/Pizza/Pizza_Margarita.png ', 12.99),
(52, 1, 'Pizza Marinera', 'Pizzas', 'Pizza marinera, un festín épico de los mares. La masa es la tierra que acoge el tesoro marino, donde gambas, mejillones y calamares danzan en una sinfonía salada. Cada bocado es una travesía culinaria que conquista tu paladar como las olas acarician la costa.', 'img/dish/Pizza/Pizza_Marinera.png ', 12.99),
(53, 1, 'Pizza Pepperoni', 'Pizzas', 'Pizza Pepperoni, una epopeya de sabor audaz. La masa se convierte en el escenario donde los robustos discos de pepperoni lideran una batalla culinaria. Cada rebanada es un triunfo épico, un deleite que despierta el paladar con la potencia de un festín conquistador.', 'img/dish/Pizza/Pizza_Peperoni.png ', 12.99),
(54, 1, 'Pizza PulledPork', 'Pizzas', 'Pizza Pulled Pork, una epopeya de sabores ahumados. La masa sostiene el tesoro de cerdo desmenuzado, fusionando notas ahumadas y salsas magnánimas. Cada bocado es un viaje épico por el reino del sabor, donde el pulled pork reina con majestuosidad sobre esta obra maestra culinaria.', 'img/dish/Pizza/Pizza_PulledPork.png ', 12.99),
(55, 1, 'Arroz con leche', 'Postres', 'Arroz con leche, un festín ancestral donde el arroz se convierte en la joya de la dulzura. La canela, regalo de los dioses, corona cada cucharada con su épica fragancia, transformando este postre en una odisea de sabores que perdura en el paladar como un cuento mágico.', 'img/dish/Postres/ArrozConLeche.png ', 6.99),
(56, 1, 'Brownie', 'Postres', 'Brownie, un trozo de éxtasis culinario. En cada mordisco, la masa suave y el intenso chocolate componen una epopeya de placer que envuelve tu paladar en un abrazo celestial. ¡Una delicia que despierta los sentidos como un poema dulce de indulgencia!', 'img/dish/Postres/Brownie.png ', 4.99),
(57, 1, 'Cannoli', 'Postres', 'Cannoli, cilindros de gloria culinaria. La masa crujiente abraza un relleno celestial de ricotta, pistacho y chocolate. Cada bocado es una epopeya de texturas y sabores, una oda a la tradición italiana que transporta el paladar a un viaje decadente de deleite.', 'img/dish/Postres/Cannoli.png ', 5.99),
(58, 1, 'Flan', 'Postres', 'Flan, la epopeya en forma de dulce. Su suavidad acaricia el paladar como un canto celestial, mientras su forma cúlmine despierta la admiración. Una obra maestra culinaria que eleva el placer a nuevas alturas, cada porción es un capítulo en la saga del deleite.', 'img/dish/Postres/Flan.png ', 4.99),
(59, 1, 'Helado', 'Postres', 'Helado, la epopeya congelada del deleite. Cada cucharada es una aventura de sabores que conquistan el paladar, mientras la textura cremosa se desliza como un poema dulce sobre tu lengua. Un viaje épico de frescura que refresca el alma en cada bocado.', 'img/dish/Postres/Helado.png ', 3.99),
(60, 1, 'PannaCotta', 'Postres', 'Pannacotta, un éxtasis cremoso esculpido en cada cucharada. La crema, como una sinfonía de seda, envuelve el paladar en una epopeya de suavidad celestial. Una obra maestra láctea que encanta y seduce con la elegancia de su textura indulgente.', 'img/dish/Postres/PannaCotta.png ', 5.99),
(61, 1, 'Plato de fruta', 'Postres', 'Plato de fruta, una sinfonía de frescura y colores vibrantes. Cada bocado es un viaje épico a través de una jungla de sabores, donde la variedad de frutas se entrelaza en una danza armoniosa sobre tu paladar. Una explosión de vitalidad que nutre y deleita en cada jugoso momento.', 'img/dish/Postres/PlatoDeFruta.png ', 4.99),
(62, 1, 'Tarta de queso', 'Postres', 'Tarta de queso, una epopeya de perfección culinaria. La masa delicada sostiene un relleno suave y cremoso, fruto de una preparación magistral. Cada bocado es una oda a la exquisitez, donde la armonía entre textura y sabor crea un festín que eleva la experiencia de la tarta de queso a la cúspide.', 'img/dish/Postres/TartaDeQueso.png ', 4.99),
(63, 1, 'Tiramisú', 'Postres', 'Tiramisú, una obra maestra de la elegancia culinaria. Cada capa de bizcocho impregnada de café y mascarpone, meticulosamente presentada, es una sinfonía visual. En su preciosa arquitectura, este postre encierra una epopeya de sabores que despiertan el paladar con la gracia de una obra de arte.', 'img/dish/Postres/Tiramisu.png ', 8.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `numero_telefono` int(11) NOT NULL,
  `comensales` tinyint(4) NOT NULL,
  `fecha` bigint(20) NOT NULL,
  `especificaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `uid`, `nombre`, `apellidos`, `numero_telefono`, `comensales`, `fecha`, `especificaciones`) VALUES
(10, 5, 'Isaac', 'Delgado Román', 1, 10, 1706787120, 'sdas'),
(11, 4, 'Isaac', 'Delgado', 971, 10, 1706958060, 'awef'),
(12, 4, 'Isaac', 'Delgado', 971, 1, 1706842980, 'dadsa'),
(13, 4, 'Isaac', 'Delgado', 971, 12, 1706936700, ''),
(14, 1, 'admin', 'admin', 1111111111, 1, 1708256640, 'Cositas'),
(15, 3, 'Juan Eladio', 'Pareja Martín', 645296397, 1, 1463309160, 'OMG'),
(16, 3, 'Juan Eladio', 'Pareja Martín', 645296397, 1, 1710071160, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `contrasena` varchar(300) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `codigo_postal` mediumint(9) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `numero_telefono` varchar(20) NOT NULL,
  `imagen` varchar(300) NOT NULL DEFAULT '/img/userImages/defaultUserImage.png',
  `admin` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contrasena`, `fecha_nacimiento`, `codigo_postal`, `pais`, `numero_telefono`, `imagen`, `admin`) VALUES
(1, 'admin', 'admin', 'admin@admin.admin', 'admin', '2000-01-01', 111111, 'admin', '1111111111', '../img/userImages/1707293194-1-fotoPerfil.png', '1'),
(2, 'jhon', 'doe', 'prueba@prueba.com', 'admin', '2012-12-12', 111111, 'admin', '1111111111', '/img/userImages/defaultUserImage.png', '0'),
(3, 'Juan Eladio', 'Pareja Martín', 'juaneladiopm@gmail.com', '$2y$10$tAEZgAw0tBNXVFU5TKOnWuWtChSAGpH6v8/J.DDyZJWHXnasD91Ay', '2003-06-20', 4156, 'de', '645296397', '../img/userImages/1707305901-3-fotoPerfil.png', '0'),
(4, 'Isaac', 'Delgado', 'isaacdelgado2004@hotmail.es', '$2y$10$FOTyU8skJMhBZqzC0bUhjO5JpZOcr1M2DcTI55K4zcyo.uHcksMPi', '1978-03-16', 42344, 'ae', '+971 22343243243', '/img/userImages/defaultUserImage.png', '0'),
(5, 'Isaac', 'Delgado Román', 'idelrom01@iesmarquesdecomares.org', '$2y$10$sa3NwnlJip9BoqlSN6dPhe/DNfLJHG9KUnYrfXbulRjcWjMKfD95K', '1978-03-23', 44234, 'us', '+1 42243243243', '/img/userImages/defaultUserImage.png', '0'),
(6, 'asdas', 'asdas', 'a@b.c', '$2y$10$i4CXtqfvoyIrgg3pQ5S/ieeOMoZgqo.M.AFs6UYv77CbTp6Ry7lz6', '2001-02-04', 23337, 'us', '12938129387317', '/img/userImages/defaultUserImage.png', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_coments` (`rid`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dish_id_offerts` (`pid`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_dish` (`uid`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_reserves` (`uid`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `user_id_coments` FOREIGN KEY (`rid`) REFERENCES `reservas` (`id`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `dish_id_offerts` FOREIGN KEY (`pid`) REFERENCES `platos` (`id`);

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `user_id_dish` FOREIGN KEY (`uid`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `user_id_reserves` FOREIGN KEY (`uid`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
