-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2024 a las 05:28:30
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro_visitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `jefe` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `jefe`, `nombre`, `estado`) VALUES
(1, 'eber challco', 'Contabilidad', 1),
(2, 'erick huayta', 'Informatica', 1),
(3, 'ever', 'Recursos Humanos', 1),
(4, 'waldo valenzuela', 'Gerencia Municipal', 1),
(5, 'Royer Ustua', 'Procuraduria Publica Municipal', 1),
(6, 'nelio villafuerte', 'Gerencia de Desarrollo Social y Servicios Publicos', 1),
(7, 'pepito', 'perez', 1),
(8, 'dasda', 'sdasda', 1),
(9, 'asd', 'asd', 1),
(10, 'asd', 'asd', 1),
(11, 'dsfgsfd', 'fsdgsdfg', 1),
(12, '4', '2', 1),
(13, 'd', 'd', 1),
(14, 'er', 'er', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nivel` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `contra`, `nivel`) VALUES
(1, 'prueba', 'prueba', 'prueba', '123', 1),
(7, 'registrador', 'registrador', 'registrador', '123', 2),
(8, 'atencion', 'atencion', 'atencion', '123', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE IF NOT EXISTS `visitante` (
  `id` int(10) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `jefe` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `detalle` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(2) NOT NULL,
  `atendido` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`id`, `dni`, `nombre`, `apellido`, `area`, `jefe`, `fecha`, `hora`, `detalle`, `estado`, `atendido`) VALUES
(24, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Recursos Humanos', 'ever', '2024-09-02', '11:43:33 am', 'gsrdgjsiodrjgoihdsjoirhgoi\r\nhsdrioghsodihrpghdsorihp\r\ngoidshrgiohdsiohpofihgidf\r\npiovnpdiofnvionsdroivnosi\r\ndrhgiodshriohsdorighsdrio\r\nghspodirhgdsrig', 1, 0),
(25, 76523215, 'Inmer', 'Apikai Caicharo', 'sdasda', 'dasda', '2024-09-02', '11:48:11 am', 'fsfeuoshrguihdsiuhrgiuhdu\r\nrihsgpiuhsuihergiuheuig\r\npuiensiurgbiubdsfuibgdius\r\nfbgiudsbpfughfduhbudf\r\njpovijsdroijvoidrjovijdorihg\r\nfodirshguhdsrpgihoi', 0, 0),
(26, 42658563, 'Cirilo', 'Suri Claudio', 'Contabilidad', 'eber challco', '2024-09-02', '11:52:21 am', 'gjruhguhsdpriuhgiuhdsrpu\r\ngihsuhruhepruhgsuiheu\r\ngihepruhgufhpgushdfughd\r\nsuifvnsuidrnvpiudnriug\r\nhdiurhgpdiushrgiuhdsprui\r\nghudshrguhpdsirugs', 0, 0),
(27, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-02', '02:24:19 pm', 'gdgdsrgdsrgdsurghoiudhriugbodiurg \r\nouhdrspiuhgudsihrgushdrpgiuhsdiurhgiudshrgpiu\r\nhdsriughsdiurhgduhrui', 0, 0),
(28, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-02', '02:32:42 pm', 'gsarjfioghspaorighosihdrgoihsdoirhgoihdriohpego\r\nihgioerhgiosheorihgoeirhgoijdfiogjoidsjfogijdsofigj\r\niodfhgidshrogihdorihgiuehpgiuheiuhrgiueshrpiugh\r\nseiuhrgiuhesrugihpseiruhgeurghi', 0, 0),
(29, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Gerencia de Desarrollo Social y Servicios Publicos', 'nelio villafuerte', '2024-09-02', '02:35:38 pm', 'geroihgphewriugheiuhrgiuhpewiurhgwiuheirugen\r\nwriugnpdiufsguhdsiufbguihdfuhigsudrguneripung\r\neiurngiufdngiuhdfiuhviudfnsvuidnrpiuvdrnviudsnrv\r\niuphsihdrfiuhdriuhfpisurx', 0, 0),
(30, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Informatica', 'erick huayta', '2024-09-02', '05:02:53 pm', 'prueba\r\nprueba\r\nvpruebapruebapruebaprueba\r\nprueba\r\nv\r\nprueba\r\npruebapruebapruebapruebaprueba', 0, 0),
(31, 42658563, 'Cirilo', 'Suri Claudio', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-02', '08:21:31 pm', 'ghsurghosdiuhrgiuhorsuihfauihefohapsiuehfouhsa\r\neiufhsauihefiuhsaeiuhfsaiundviunasuevnsiuenfuihs\r\naeiuphfiusgaefiugapwiuegfiuwgeiufhsiudnfuipnsad\r\niucnuesnpciunseuhfiusahefse', 0, 0),
(32, 76523215, 'Inmer', 'Apikai Caicharo', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-02', '08:22:46 pm', 'ghsaoiefoisaeoihfoiaheoifhwoiehfpoiwaeyoifywaoi\r\nehfiowahefiohwaeoifnwapoeifnowiehfiosahdiovnsa\r\nionoiehfoieshfoisaenfiosaneofinsaeiovniosaehpfoih\r\nsaeoifhpwyefwuehfwuefnpuisadnofinosaiepofijosie\r\nfse', 0, 0),
(33, 42658563, 'Cirilo', 'Suri Claudio', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-02', '08:31:02 pm', 'asefsaefsefwfwfafwafwefoisa\r\ndhfiuhsaiuehfiusahdiufhsaiue\r\ngfiuogaseiufs', 1, 0),
(34, 76523215, 'Inmer', 'Apikai Caicharo', 'Recursos Humanos', 'ever', '2024-09-02', '08:31:30 pm', 'fsefaweofuhaweuhgupihas\r\nriuiubasiupefiusaneifnpausi\r\nenfuinsaeiunviausenuivpas\r\negfhsaeuhfaiupshefiuhwiuf\r\nhwauhfuwaienfiuvnwinwpe\r\niuvnwaiuhefuhwaeuhfwaiu\r\npegfiugwaieu', 0, 0),
(35, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Gerencia de Desarrollo Social y Servicios Publicos', 'nelio villafuerte', '2024-09-02', '08:33:42 pm', 'nfeuafupebiupfbaubepufb\r\nwiuebfubdskfjhpsadjhvohs\r\naevuhupesihfiuhesfuisupei\r\nnfiusnvaunaspeiuvgsaeiup\r\ngfaiusegfiugseufgusiepfbiu\r\nsndviusdfsae', 1, 0),
(36, 74319329, 'Jose Alonso', 'Rodriguez Solis', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-02', '08:34:08 pm', 'fasefouhaesiuofiuagseiufhi\r\nuwheofiuhweiupfhauwiefiu\r\nnaseiufnawupefnuisdnuivhi\r\nuehpiufaiugeiufgpasiuegfu\r\nsageufigsaiuegfpsiuegfusa\r\nhefpiusaneufnwiepvw', 1, 0),
(37, 42658563, 'Cirilo', 'Suri Claudio', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-02', '08:45:35 pm', 'gnoaihegiuwiue3bgpiuabe\r\nsiugbiausegubpsaiubgs\r\naheughpsauehfouhsefupse\r\nnfuinsaeufnvpsenfunsu\r\nefpuisaeiufbasuebfuaipbse\r\nufbwpsuhefhsudhfv', 1, 0),
(38, 42658563, 'Cirilo', 'Suri Claudio', 'Informatica', 'erick huayta', '2024-09-02', '08:51:01 pm', 'gsaehfuaihseoiuhfaiushefiuwbaiueobfiuwbeiufbuw\r\naioegfihwaiuehfuwahefiuhwaueihfuwaieofwauefnu\r\nnweaovbwuiefuvibwuefhweaufhoi', 0, 0),
(39, 42658563, 'Cirilo', 'Suri Claudio', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-02', '08:59:51 pm', 'fseafasefawefwefwaefwaefwaefawefadafsad', 0, 0),
(40, 42658563, 'Cirilo', 'Suri Claudio', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-02', '10:12:19 pm', 'fsaefnawueifniubaweiufbpiuwaebiugbwaiupebgiuw\r\nbeaiugbpwaiuebfiuhweaiuhfwaiuhegfupigweiugfiu\r\nwageiufgwaiuefbuiwaebfiubwaeuibfwiupbefiubwai\r\nuebfpuwabeigfuiwauegfpigaweiugfiuwagpefiugwei\r\nufgaw', 1, 0),
(41, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-03', '09:39:51 am', 'fgseohfuhoaiesugiuaeiughÃ³aiushguhpasiuhrgiuhsu\r\ndihfgiuhidsuhprgiundriungviunriuniuvhspdiuhgrgi\r\nudsurhgpiusrgt', 1, 0),
(42, 42658563, 'Cirilo', 'Suri Claudio', 'Gerencia de Desarrollo Social y Servicios Publicos', 'nelio villafuerte', '2024-09-03', '09:58:40 am', 'gaseoifpiauhseufihupaishefiuhaseiuhfiusneiunviun\r\nespiuhviaushefiugesaiugfpiuegsafiusaiuebfiusavius\r\npebuvbiusaegfiugasiuegfiusapefiusueifwefdvs', 1, 0),
(43, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Recursos Humanos', 'ever', '2024-09-04', '10:26:03 am', 'fsafosuhefiuahseiuofhsiuahefuiahseiupfbsaibefiusb\r\nepiufbsiuaebfpiusabgviuhsaeubhsiupnbsuefbusaef\r\nusaiupegfusaigfiuhsaueifhsaiuhefpiuahseiufnsaiuen\r\nfiua', 1, 0),
(44, 76523215, 'Inmer', 'Apikai Caicharo', 'Informatica', 'erick huayta', '2024-09-04', '10:53:11 am', 'fsaefsefsefpoiu\r\nhieuhfuhawiup\r\nefuigweuhfiuw\r\ngehfiugweiufh\r\nwouhefiuwhefi\r\nunweufpwgaef\r\niuhiwuhsiuhsu\r\nhfupsdihiuvhp\r\nsiuva', 0, 0),
(45, 42658563, 'Cirilo', 'Suri Claudio', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-04', '10:53:48 am', 'fwefwoquehfiuag\r\nseiufgawpeiugfpi\r\nuwgepfiugwauie\r\ngfaiuwegfuiwahe\r\nfuiwapnefniuwae', 0, 0),
(46, 72642646, 'Kimberly Daliet', 'Arevalo Giron', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-04', '10:58:53 am', 'gfdnsiuhgoaiushgriuhasiurgh\r\nupihseiufhuaihesfiuhsapeuvni\r\nusaebvuseufpihsaeiuhfuwiga\r\nepfiugweiugfuipwgdgsifugue\r\nsgpf', 0, 0),
(47, 42658563, 'Cirilo', 'Suri Claudio', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-09', '02:58:12 pm', 'ghosapughousheiu\r\nhsaiuefhoushefuiba\r\npesiugfIUYGWEIYFU\r\nGpwiuegfpiuWEGF\r\nUewhwPEIUHFDIUe\r\nqwcbpiuEWGFUwue\r\nigfpiuwGEPFIUGwp\r\neiugfiuEWCBWEIUB\r\nCiuwefgweiugfwiue\r\ngfuigweuigfWUEGF\r\nPUienbciunweiucpw', 1, 0),
(48, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-09', '03:00:53 pm', 'gasepoihfpoauesfp\r\noiuhaeiubaiugwebg\r\niufhwepiufhbwuieb\r\nafcaiupfwebciunwe\r\navuifwahwaeuhfiuw\r\nahepfuihweugfaiuw\r\negfiuwagefiuwegfui\r\npwheifuhwiuehfiuw\r\nefhu', 1, 0),
(49, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Recursos Humanos', 'ever', '2024-09-09', '03:02:03 pm', 'fgesagpiuaeoihgui\r\nwaheughwuiehgwui\r\nrhpguieahrvpiunasri\r\nuvbaiuerwbveiurvhe\r\nriuhvueaihrpfguihae\r\nrufihawiehfuwhepfu\r\niw', 1, 0),
(50, 76525466, 'Sebastian Joan Marcelo', 'Romero Quispe', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-09', '03:13:37 pm', 'vasefhuhepuahfwiu\r\ngeiuwgpfiugawiueg\r\nfiugwaieugfpwaiue\r\ngfiugweuifhgpwiuh\r\nefpiuwahefiuhwapei\r\nuvnuiwebfuwiuyegp\r\nfgiuwaeuifgpauwie\r\ngfiugwaeiufggwaei\r\nufgwaiuef', 1, 0),
(51, 76119664, 'Crujita Jenifer', 'Castro Licito', 'Recursos Humanos', 'ever', '2024-09-09', '04:20:08 pm', 'vewrgpoiherugeuw\r\nhrgoiuweoruighpÃ­u\r\nohewr4ogi\r\nÂ´hwoei3rhgoiehrnb\r\noiewjroighjioewrgoi\r\nÂ´weoirgnoewir4g', 1, 0),
(52, 76532646, 'Yonatan', 'Atao Tapia', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-09', '09:54:30 pm', 'srbgisdbrigbpsuidr\r\nguivneurnuesprhvse\r\nurhviuhsperuihvbiu\r\nersbviupsbervudsui\r\nbpfgiuhiuhrgupihsi\r\nuerhvbieurpiubasei\r\nuvgiugeriuvgaiur', 1, 0),
(53, 76534852, 'Gean Pierre', 'Llerena Zapata', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-09', '09:57:25 pm', 'asefejbfpiuabeiufba\r\niuwegbfiubapwiebf\r\naiuwbefuhwapeouf\r\nhuwaheguhpasuhfi\r\nusahepfiusaidvbiasi\r\neuvbsiupegfhusieah\r\nfupihsaefwe', 1, 0),
(54, 71345265, 'Ashly Sharoon', 'Silva Barzola', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-09', '10:15:00 pm', 'gfasegnsaoeuhfpuhesafugauhefuhwepufihwiuenfiu\r\nvnawiupawefiugwapeiugfaiuwegfiugwapueigfiugsa\r\ndfiugsaiudgfiuagsdiufasef', 0, 0),
(55, 74626561, 'Arely Tatiana', 'Zarayasi Gamonal', 'Contabilidad', 'eber challco', '2024-09-10', '09:57:11 am', 'afsdfsoeihfoaipshe\r\npgoihsaeiuhfoighs\r\naepofihosaiehvoih\r\nsaepoihoaieshvoia\r\nhewofihaosiehfoiw\r\neofinwoiÃ©fnoi\r\nÂ´wanefowie', 0, 0),
(56, 72345685, 'Liessel Yareth', 'Rojas Reyes', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-10', '10:10:26 am', 'fasefoihspoeiuhfoiugsaefuigsaiuehfpiuhpwauehfw\r\nuhefiuwageiugfpwaiugefiugwaiuegfiuwpgaefiugwa\r\niuehfpwiuahpebfpiusbaiufdbpsaiuegfiugseiufgsueg\r\nifu', 1, 0),
(57, 71524635, 'Elmer', 'Delgado Huanca', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-10', '10:42:24 am', 'gawoeighpaowheghaosiurhgoiusahgroihsoridhgos\r\niÃ©rhginaoeirngoiÃ©ahrogiheaorihgoÃ©air\r\nÂ´vjsaimdrvioaenrvoi\r\nÂ´naoerihvhersighsÃ³eihrgihesroighoesirh\r\nÂ´giosenrgoisenÂ´roigosierngoihergi', 1, 0),
(58, 70345265, 'Joel', 'Perez Rojas', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-10', '10:44:33 am', 'gsehgpiuhaweoguhaiuwheogiuhsaiuhgiuÃ¡hsegiuh\r\nÂ´sauhgroihsadoughaosidhgoiÂ´hsadoifhsaioheogiha\r\nÂ´souhgsufdhguÂ´shdroguhodu\r\nÂ´hrgoudhroguhdourhgu', 0, 0),
(59, 70345265, 'Joel', 'Perez Rojas', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-10', '10:45:57 am', 'gasergjiorshboiÂ´sherobihioshdfbiohsiodfhbh\r\nÂ´dfihbosidhfobih\r\nÂ´dsfihgoidsfnbosirnÃ³ersnboisernbohies', 0, 0),
(60, 75648524, 'Sissi Jamileth', 'Bazan Coronel', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-11', '08:26:51 am', 'gsarhgpohsrogihspoeurihgieoiurhgoieshrogiuhseo\r\nriuhgiuheriugiuersbgusberiughsiuehrgiuhesriughes\r\nuhrghseguhesurigesrge', 1, 0),
(61, 73254652, 'Dayli Delyne', 'Julca Inocencio', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-12', '08:46:00 am', 'fffffffffffffffffasdgsdrtgdrhdthsdfhdsgbsrtssdrgdsrg\r\nxcfgxdrgdsrg', 0, 0),
(62, 24386595, 'Claudio', 'Loaiza Olmedo', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-12', '08:37:43 pm', 'garsgbrsguhsÃ³ruhpoviuhsfdoughosurgupohesroug\r\nhoesurhguoehroughnsoeurnvunserouvhosuhrbviu\r\nbsipruvbiusbrbsdrg', 1, 1),
(63, 74365264, 'Elsa', 'Feliciano Silva', 'Gerencia Municipal', 'waldo valenzuela', '2024-09-12', '08:40:50 pm', 'garsgdusihrgpiuaurihgpiueahwrugiheiurhgiuehrviu\r\nneriuniuweravbeiurbviuhasgfuhiushfdguhdaiuhfgs\r\nuihdgiurseiugsiuehrufhue', 1, 1),
(64, 76345265, 'Jhofer Estiber', 'Huertas Sanchez', 'Recursos Humanos', 'ever', '2024-09-12', '09:29:43 pm', 'gdrnsaguhpdrsiuhg\r\niuhrgiuhiudhbiuvdn\r\nsfriupdiurhviuhsdriu\r\nvpsiudrnvusberiuvb\r\npsiuerbviuhgdsfiubs\r\ndhpfiudhgiuhsdfuih\r\ngiudsfgndsruingsiu\r\ndrgipu', 1, 1),
(65, 75626462, 'Yarisa Abigail', 'Mejia Sevilla', 'Recursos Humanos', 'ever', '2024-09-12', '09:40:12 pm', 'gadrpdauhgruhearughauehgraiuhegruiheuirgbiuae\r\nbrviubaepriubvpaiuerverhvueahrfuheaurihgiueahri\r\nugheaiurhgiuea', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
