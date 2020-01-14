-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2020 a las 07:30:48
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `briane`
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
(38, 'Siempre Actualizados: Auditoria de Homologación de Proveedores', 'El pasado 15 y 16 de octubre, tuvimos la visita de la Ing. Josely Susan Alejandro Chávez, representante de SGS contrato por uno de nuestros cliente mineros, para valide la gestión de nuestros procesos organizacional. Definiendo que somos una empresa que cumple con los requisitos legales y cumple con los estándares de calida', '2019-11-15', 'img_b2fb7cc5e47790e93b5aa2d4cb1332b2.jpg'),
(49, 'Siempre Seguros: Control de Acceso en Base 1', 'Se ha puesto en funcionamiento en Base 1 la programación de atenciones de unidades de transporte a través de un servicio programado. Razón por la cual el conductor deberá de coordinar previamente con la Central de Monitoreo (GPS) para que programe el servicio con el Supervisor de Mantenimiento. El personal de seguridad recibirá la confirmación de acceso del Supervisor de Mantenimiento, se procederá a verificar sus documentos por la ventanilla de acceso peatonal y posterior inspección de unidades. El conductor deberá de permanecer en su unidad hasta que se atienda su servicio. Para poder acceder a otras locaciones deberá de tener autorización del Supervisor de Mantenimiento.', '2019-11-27', 'img_0a823e470527f5b16d58b8512e36b253.jpg'),
(50, 'Siempre Capacitados: Taller de interpretación de la Norma ISO 9001 , versión 2015', 'El equipo de gestión Briane , llevaron el taller de Interpretación de la norma ISO 9001:2015, con el objetivo de reforzar la metodología que nos asegure cumplir con los requisitos de los clientes , asegurar un servicio confiable y seguro. Para ello tuvimos la participación activa de la Alta Dirección liderada por el Ing. Alvaro Villalobos gerente de operaciones, quien nos invita a reflexionar en nuestro día a día para ser cada día mejor. En Briane... ¡Vamos por más!', '2019-12-19', 'img_8e52aaa954f90621ba6f7b183be3c5bc.jpg'),
(51, 'Comunicado de Proveedores - Cierre Contable del año 2019', 'Se comunica a todos nuestros proveedores que por el Cierre Contable 2019, la recepción de facturas, recibos por honorarios, notas de crédito, notas de débito, guías de remisión y otros comprobantes de pago emitidos por bienes y/o servicios prestados en el año 2019, solo serán aceptados hasta el viernes 20 de diciembre del 2019 inclusive, en horario de 9.00am - 13.00pm en nuestras oficinas de Av. Elmer Faucett 5104. Sólo para esta semana se recepcionarán los días miércoles 18 y viernes 20.\r\nA partir del 02 de enero de 2020 sólo se recibirán comprobantes correspondientes al año 2020. Tener en cuenta que los documentos con fecha de emisión del año 2019 no serán recepcionados, se les agradecerá no insistir.\r\nFavor tomar las medidas que consideren pertinentes para evitar cualquier contratiempo.\r\nAgradecemos de antemano su comprensión.\r\nAtentamente,', '2019-12-19', 'img_8a97520199ebc52765c091b2e36f944d.jpg'),
(52, 'Siempre Iluminados: ¡ Mantenimiento 24 horas !', 'Desde 14 de noviembre del 2019, contamos con un nuevo servicio de iluminación ecológica en nuestro taller de mantenimiento en Base 1. Esta obra a sido gestionado por el Ing. José Yeren, Jefe de la división de mantenimiento, con esta medida estaremos mejorando nuestro tiempos de atención, operatividad de nuestras unidades de transportes. Lo que nos permitirá ir trabajando día a día para ser los mejora en nuestro sector. En Briane ..... ¡ Vamos por más!', '2019-12-14', 'img_f1bbb0e34a35f06eaa7c58c8f6dd9c58.jpg'),
(53, 'Siempre Innovando: Implementación de ERP Genesys en Operaciones', 'El pasado mes de octubre pusimos en funcionamiento el ERP Genesys con la finalidad de administrar el proceso de pagos de beneficios dinerarios para nuestros conductores que les permita tener la información confiable que hace que se le pague sus beneficios de manera correcta y oportuno. Para ello RRHH con el apoyo de Teresa Sandoval capacitó al equipo de operaciones para que conozcan la herramienta que le permitirá mejorar la toma de decisiones. El líder del proceso por parte de operaciones es Juan Carlos Hurtado nuestro Administrador de Flota.', '2019-12-14', 'img_cc35e9bdbc2105e6f2caf505cfdc4824.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_ofertas` int(11) NOT NULL,
  `puesto` longtext NOT NULL,
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
(2, 'editar puestoo', 'hola e modificado en el campo ingresar \r\ndescripcion', '2019-11-21', 'hola e modificado en el campo ingresar \r\nrequisitos\r\n', 'hola e modificado en el campo ingresar \r\nbeneficios', 'hola e modificado en el campo ingresar \r\nrequerimientos', 'hola e modificado en el campo ingresar datos \r\ngenerales'),
(4, 'asdasds', 'asdad', '2019-11-01', 'asdsasda', 'asdasdas', 'asdasda', 'asdasd'),
(5, 'Conductor de Semitrailer', 'asdasdadsad', '2019-11-14', 'asdasdasdad', 'asdasdda', 'asdsadadsad', 'asdadasdasdasdsad'),
(6, 'Conductor de trailer', 'Empresa de transportes ZETRAMSA SAC , dedicada al transporte de Materiales Peligrosos, se encuentra en la búsqueda del mejor talento para cubrir el puesto de: CONDUCTOR DE SEMITRAILER', '2019-11-13', 'asdasdasdasdasd', 'asdasdasdasd', 'asdasdsadadasdasd', 'asdasdasassdasd'),
(7, 'Conductor de Semitrailer', 'Empresa de transportes ZETRAMSA SAC , dedicada al transporte de Materiales Peligrosos, se encuentra en la búsqueda del mejor talento para cubrir el puesto de: CONDUCTOR DE SEMITRAILER\r\n', '2019-11-17', '- Tres (3 años) de experiencia en la Conducción de Semitrailer. De preferencia en transporte de Materiales Peligrosos.\r\n- Licencia de conducir AIII-C.\r\n- Licencia A-IV (materiales peligrosos) (Indispensable).\r\n- Record de conductor MTC , sin papeleta.\r\n- De preferencia domiciliado en Lima.', 'asdadad', 'asdasdasd', 'asdasdsad'),
(8, 'Conductor de Semitrailer3', 'Empresa de transportes ZETRAMSA SAC , dedicada al transporte de Materiales Peligrosos, se encuentra en la búsqueda del mejor talento para cubrir el puesto de: CONDUCTOR DE SEMITRAILER', '2019-11-15', '\r\n- Tres (3 años) de experiencia en la Conducción de Semitrailer. De preferencia en transporte de Materiales Peligrosos.\r\n- Licencia de conducir AIII-C.\r\n- Licencia A-IV (materiales peligrosos) (Indispensable).\r\n- Record de conductor MTC , sin papeleta.\r\n- De preferencia domiciliado en Lima.', 'asdasdada', '- Básicos de mecánica y electricidad (Deseable).\r\n- Transporte de mercancías.\r\n- Rutas a nivel nacional.\r\n- Inspecciones de seguridad de vehículos y semirremolques.', 'asdasdsadas'),
(9, 'Conductor de Semitrailer4', 'Empresa de transportes ZETRAMSA SAC , dedicada al transporte de Materiales Peligrosos, se encuentra en la búsqueda del mejor talento para cubrir el puesto de: CONDUCTOR DE SEMITRAILER', '2019-11-10', '- Tres (3 años) de experiencia en la Conducción de Semitrailer. De preferencia en transporte de Materiales Peligrosos.\r\n- Licencia de conducir AIII-C.\r\n- Licencia A-IV (materiales peligrosos) (Indispensable).\r\n- Record de conductor MTC , sin papeleta.\r\n- De preferencia domiciliado en Lima.', 'ingreso directo a planilla con todos los beneficios de ley , Utilidades ,Seguro.', '- Básicos de mecánica y electricidad (Deseable).\r\n- Transporte de mercancías.\r\n- Rutas a nivel nacional.\r\n- Inspecciones de seguridad de vehículos y semirremolques.', 'asdadsadasd'),
(10, 'dasdasdads', 'asdasdasdads', '2019-11-16', 'asdasdasdsad', 'asdasdasda', 'asdadsadadsa', 'Los postulantes que cumplan con los requisitos mencionados, podrán acercarse con su CV documentado a av. '),
(11, 'problema de txt', ' Mz L Lte. 6 Santa Anita. ( referencia: 5 min. del Ovalo Santa Anita) al asdsad@zetramsa.com.pe', '2019-11-02', 'saddddddddddddddd', 'dasdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsd', 'sadasddadada', 'saaaaaaaaaaaaaaaaaaaaaaa'),
(12, 'obligatorio', 'asdasd', '2019-11-08', 'asdsaddassssssssss', 'asddddddddddddd', 'asddddddd', 'asddddddddd'),
(13, 'Conductor de Semi Trailler', 'Nos encontramos en un proceso de expansión por lo que estamos requiriendo de conductores profesionales para nuestros diferentes servicios en Lima Metropolitana.\r\nServicio para la ruta de Gambeta, Cantera Hierbabuena, planta Materiales, Base de Gambeta de lunes a sábados. Si quieres incrementar tus ingresos puedes atender los servicios de fines de semana en el puerto. Previa autorización del Admini', '2019-12-16', '2 años de experiencia como conductor de semi trailler (deseable en carga seca).\r\nLicencia vigente A3B debe de tener 4 años de antigüedad y la A3C debe de tener 2 años de antoiguedad.\r\nNo tener más de 3 faltas graves en los últimos 2 años consecutivos.\r\nCv documentado con sus certificados de trabajo actualizado.\r\nDisponibilidad para realizar trabajos rotativos, disponibilidad inmediata.', '*Ingreso a planillas desde el primer día, con todos los beneficios de ley.\r\n*Ingresos remunerativos mayor al mercado laboral , con trabajo asegurado.\r\n*Contamos con una ventaja competitiva al tener un almacén que nos asegura el trabajo constante y reducción de tiempos de espera en colas.\r\n* Reciben un ingreso variable por las vueltas realizadas y que están afectos a todo los beneficios de ley.', '20 Conductores para las nuevas rutas en nuestro de operaciones mineras\r\n20 Conductores para nuestros servicios de puerto y despacho desde los almacenes de nuestros clientes.', 'Somos la empresa de transportes BRIANE, especializada en el transporte de carga pesada desde los servicios de tolva, plataformas, cisternas, cargadores frontales a disposición para la atención de los requerimiento de los clientes.\r\nOrientamos todo nuestro esfuerzo en hacer que nuestros clientes cumplan con sus objetivos y por lo tanto crecer con ellos, llegando a ser considerado como su socio es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id_numero` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id_numero`, `nombre`, `paterno`, `materno`, `telefono`, `correo`, `imagen`) VALUES
(22222222, 'qweqwe', 'qwewqe', 'qweqwe', '213123', 'qdasd@hotmialcsa.com', NULL),
(33333333, 'qweqwe', 'qeqweeq', 'qqwewe', '789456123', 'qwewqe@sjd.com', NULL),
(44444444, 'jorge', 'banda', 'banda', '12312312123', 'banda@sad.com', NULL),
(55555555, 'asdasd', 'asdasd', 'asdsdsdds', '12345678', 'asdasd@gmao.com', NULL),
(66666666, 'asdgggg', 'ggggg', 'ggggg', '9876542', 'hunun@gamil.ocm', 'imgProfile'),
(76202977, 'piero', 'rado', 'macavilca', '914131557', 'michell.rado@tecsup.edu.pe', 'rado.jpg'),
(88888888, 'duarte', 'florez', 'florez', '151753123', 'florez@gmial.com', 'duarte.jpg');

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
(3, 'colaborador'),
(4, 'conductor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `tokenExpire` datetime NOT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idtipo`, `idrol`, `clave`, `token`, `tokenExpire`, `numero`) VALUES
(4, 2, 2, 'dddd', '', '2019-08-12 00:00:00', 0),
(5, 2, 2, 'wA5rA5pE1', '', '2019-10-21 03:34:39', 0),
(7, 1, 1, 'asds', '', '0000-00-00 00:00:00', 0),
(10, 2, 2, '123', '', '0000-00-00 00:00:00', 0),
(11, 1, 2, '789', '', '0000-00-00 00:00:00', 0),
(18, 2, 2, '5555', '', '0000-00-00 00:00:00', 0),
(19, 3, 2, 'ql9fwvag6j', '', '2019-08-24 19:59:34', 0),
(20, 1, 2, '8888', 'ql9fwvag6j', '2019-08-24 19:03:06', 0),
(21, 2, 2, '44444', '', '0000-00-00 00:00:00', 0),
(22, 3, 2, '2222', '', '0000-00-00 00:00:00', 0),
(23, 1, 1, 'PIEROdead1998', '', '2019-10-20 23:35:29', 76202977),
(24, 1, 3, 'Jysuper2019', '', '0000-00-00 00:00:00', 0),
(27, 1, 2, 'qwe', '', '0000-00-00 00:00:00', 0),
(28, 1, 2, '', '', '0000-00-00 00:00:00', 0),
(29, 1, 2, 'Piero159', '', '0000-00-00 00:00:00', 0),
(30, 1, 4, 'Ronaldo1998', '', '0000-00-00 00:00:00', 0),
(40, 1, 4, 'Rhgjhg545', '', '0000-00-00 00:00:00', 33333333),
(41, 1, 4, 'Banda123', '', '0000-00-00 00:00:00', 44444444),
(42, 1, 4, 'asd89', '', '0000-00-00 00:00:00', 55555555),
(43, 1, 4, 'RFasd5454', '', '0000-00-00 00:00:00', 66666666),
(44, 1, 4, 'Florez123', '', '0000-00-00 00:00:00', 88888888);

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
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_numero`);

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
  ADD KEY `idtipo` (`idtipo`),
  ADD KEY `fk_profile_num_idx` (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_ofertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_profile_num` FOREIGN KEY (`numero`) REFERENCES `profile` (`id_numero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idrol` FOREIGN KEY (`idrol`) REFERENCES `tipo_usuario` (`id_rol`),
  ADD CONSTRAINT `idtipo` FOREIGN KEY (`idtipo`) REFERENCES `tipo_documento` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
