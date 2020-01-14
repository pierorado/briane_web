-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-01-2020 a las 09:28:51
-- Versión del servidor: 5.5.62-cll
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `briane19_adminbriane`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_not` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `noticias` longtext NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_not`, `titulo`, `noticias`, `fecha`, `foto`) VALUES
(3, ' Siempre Capacitados: Taller de interpretación de la Norma ISO 9001 , versión 2015', 'El equipo de gestión Briane , llevaron el taller de Interpretación de la norma ISO 9001:2015, con el objetivo de reforzar la metodología que nos asegure cumplir con los requisitos de los clientes , asegurar un servicio confiable y seguro. Para ello tuvimos la participación activa de la Alta Dirección liderada por el Ing. Alvaro Villalobos gerente de operaciones, quien nos invita a reflexionar en nuestro día a día para ser cada día mejor. En Briane... ¡Vamos por más! ', '2019-11-17', 'foto_3.jpg'),
(4, ' Siempre Actualizados: Auditoria de Homologación de Proveedores', 'El pasado 15 y 16 de octubre, tuvimos la visita de la Ing. Josely Susan Alejandro Chávez, representante de SGS contrato por uno de nuestros cliente mineros, para valide la gestión de nuestros procesos organizacional. Definiendo que somos una empresa que cumple con los requisitos legales y cumple con los estándares de calidad en el servicio de traslado de carga pesada. Damos la felicitaciones del caso a todo los colaboradores involucrados en la gestión. Este proceso esta liderado desde el Sistema Integrado de Gestión con Jesús Velasquez y el Ing. Dany Vásquez líder SSOMA. En Briane.... ¡Vamor por más!.', '2019-11-17', 'foto_4.jpg'),
(5, ' Siempre Seguros: Control de Acceso en Base 1 ', 'Se ha puesto en funcionamiento en Base 1 la programación de atenciones de unidades de transporte a través de un servicio programado. Razón por la cual el conductor deberá de coordinar previamente con la Central de Monitoreo (GPS) para que programe el servicio con el Supervisor de Mantenimiento. El personal de seguridad recibirá la confirmación de acceso del Supervisor de Mantenimiento, se procederá a verificar sus documentos por la ventanilla de acceso peatonal y posterior inspección de unidades. El conductor deberá de permanecer en su unidad hasta que se atienda su servicio. Para poder acceder a otras locaciones deberá de tener autorización del Supervisor de Mantenimiento.  ', '2019-11-17', 'foto_5.jpg'),
(6, ' Siempre Innovando: Implementación de ERP Genesys en Operaciones', 'El pasado mes de octubre pusimos en funcionamiento el ERP Genesys con la finalidad de administrar el proceso de pagos de beneficios dinerarios para nuestros conductores que les permita tener la información confiable que hace que se le pague sus beneficios de manera correcta y oportuno. Para ello RRHH con el apoyo de Teresa Sandoval capacitó al equipo de operaciones para que conozcan la herramienta que le permitirá mejorar la toma de decisiones. El líder del proceso por parte de operaciones es Juan Carlos Hurtado nuestro Administrador de Flota.', '2019-11-17', 'foto_6.jpg'),
(7, ' Siempre Iluminados: ¡ Mantenimiento 24 horas !', 'Desde 14 de noviembre del 2019, contamos con un nuevo servicio de iluminación ecológica en nuestro taller de mantenimiento en Base 1. Esta obra a sido gestionado por el Ing. José Yeren, Jefe de la división de mantenimiento, con esta medida estaremos mejorando nuestro tiempos de atención, operatividad de nuestras unidades de transportes. Lo que nos permitirá ir trabajando día a día para ser los mejora en nuestro sector. En Briane ..... ¡ Vamos por más!', '2019-11-17', 'foto_7.jpg'),
(11, 'Política de Calidad Briane', 'Compartimos nuestra Política de Calidad a todos nuestros y al público en general, lineamiento organizacional que nos enfoca en concentrar todos nuestros esfuerzos en cumplir con los requisitos por nuestros y cliente logra en cada servicio su satisfacción como premio al esfuerzo. En Briane nos esforzamos en ser cada día mejores personas que trabajan para lograr el éxito de nuestros clientes.', '2019-12-17', 'img_f43ec2e03776d803ced35782f3e494ae.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_ofertas` int(11) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `descripcion` longtext NOT NULL,
  `fecha` date NOT NULL,
  `requisitos` longtext NOT NULL,
  `beneficios` longtext NOT NULL,
  `requerimientos` longtext NOT NULL,
  `datos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id_ofertas`, `puesto`, `descripcion`, `fecha`, `requisitos`, `beneficios`, `requerimientos`, `datos`) VALUES
(1, 'Conductor de Semi Trailler', 'Nos encontramos en un proceso de expansión por lo que estamos requiriendo de conductores profesionales para nuestros diferentes servicios en Lima Metropolitana.\r\nServicio para la ruta de Gambeta, Cantera Hierbabuena, planta Materiales, Base de Gambeta de lunes a sábados. Si quieres incrementar tus ingresos puedes atender los servicios de fines de semana en el puerto. Previa autorización del Admini', '2019-08-27', '2 años de experiencia como conductor de semi trailler (deseable en carga seca).\r\nLicencia vigente A3B  debe de tener 4 años de antigüedad y la  A3C debe de tener 2 años de antoiguedad.\r\nNo tener más de 3 faltas graves en los últimos 2 años consecutivos.\r\nCv documentado con sus certificados de trabajo actualizado.\r\nDisponibilidad para realizar trabajos rotativos, disponibilidad inmediata.\r\n', '*Ingreso a planillas desde el primer día, con todos los beneficios de ley.\r\n*Ingresos remunerativos mayor al mercado laboral , con trabajo asegurado.\r\n*Contamos con una ventaja competitiva al tener un almacén que nos asegura el trabajo constante y reducción de tiempos de espera en colas.\r\n* Reciben un ingreso variable por las vueltas realizadas y que están afectos a todo los beneficios de ley.\r\n* ', '20 Conductores para las nuevas rutas en nuestro de operaciones mineras\r\n20 Conductores para nuestros servicios de puerto y despacho desde los almacenes de nuestros clientes.\r\n', 'Somos la empresa de transportes BRIANE, especializada en el transporte de carga pesada desde los servicios de tolva, plataformas, cisternas, cargadores frontales a disposición para la atención de los requerimiento de los clientes. \r\nOrientamos todo nuestro esfuerzo en hacer que nuestros clientes cumplan con sus objetivos y por lo tanto crecer con ellos, llegando a ser considerado  como su socio es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo`, `documento`) VALUES
(1, 'dni'),
(2, 'extranjeria'),
(3, 'PTP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'personal'),
(3, 'colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(100) NOT NULL,
  `materno` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `tokenExpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `numero`, `idtipo`, `idrol`, `clave`, `telefono`, `correo`, `nombre`, `paterno`, `materno`, `token`, `tokenExpire`) VALUES
(18, '002665622', 3, 1, 'Supersac1', '936636750', 'elio.petit@supervan.pe', 'elio nicolas', 'petit', 'orellanes', '', '2019-10-31 11:05:12'),
(19, '76202977', 1, 1, 'Rado1998', '914131557', 'michell.rado@tecsup.edu.pe', 'piero', 'rado', 'macavilica', 'n318b7kt0r', '2019-10-26 02:44:30'),
(25, '88888887', 1, 2, 'Persona123', '111111112', 'Robles@gmail.com', 'Jorge', 'Robles', 'Robles', '2g0wns75b', '2019-08-24 18:55:03'),
(26, '09670873', 1, 1, 'Rrsuper2019', '997041427', 'renzo.rodriguez@supervan.pe', 'Renzo José', 'Rodriguez', 'Carrasco', '', '0000-00-00 00:00:00'),
(27, '666666666', 3, 2, 'fE2mU5tO5', '112233333', 'juanradorado@gmail.com', 'pppppp', 'pppp', 'pppp', '', '2019-10-26 03:07:48'),
(28, '444444444', 3, 2, 'ptp', '888888888', 'pepe@gmial.com', 'pepe', 'perez', 'perez', '', '0000-00-00 00:00:00'),
(29, '42207404', 1, 1, 'seguridad1', '944918093', 'dany.vasquez@supervan.pe', 'Dany', 'Vasquez', 'Valverde', '', '0000-00-00 00:00:00'),
(32, '44287980', 1, 3, 'Jysuper2019', '999999999', 'cambiar@supervan.pe', 'Jose', 'Yeren', 'cambiar', '', '0000-00-00 00:00:00'),
(33, '41109083', 1, 1, 'Ademir0281', '998109397', 'ademir.martinez@supervan.pe', 'Ademir', 'Martínez', 'Huaytan', '', '2019-12-27 09:25:11'),
(34, '75757239', 1, 1, '992784349', '992784349', 'brendaminella13@gmail.com', 'Brenda ', 'Aguilar', 'Baca', '', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_not`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_ofertas`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idrol` (`idrol`),
  ADD KEY `idtipo` (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_ofertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idrol` FOREIGN KEY (`idrol`) REFERENCES `tipo_usuario` (`id_rol`),
  ADD CONSTRAINT `idtipo` FOREIGN KEY (`idtipo`) REFERENCES `tipo_documento` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
