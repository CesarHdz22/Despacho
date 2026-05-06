-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2023 a las 00:01:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `despacho`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actexp`
--

CREATE TABLE `actexp` (
  `Id_actexp` int(11) NOT NULL,
  `expediente` varchar(100) NOT NULL,
  `id_cliente` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actexp`
--

INSERT INTO `actexp` (`Id_actexp`, `expediente`, `id_cliente`) VALUES
(1, '291/2023', 1),
(3, '412/2019', 3),
(4, '206/2019', 2),
(5, '79/2014', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

CREATE TABLE `caso` (
  `expediente` varchar(100) NOT NULL,
  `juicio` varchar(1000) NOT NULL,
  `actor` varchar(1000) NOT NULL,
  `demandado` varchar(3000) NOT NULL,
  `u_act` varchar(1000) NOT NULL,
  `etapa` varchar(400) NOT NULL,
  `a_por_realizar` varchar(1000) NOT NULL,
  `observaciones` varchar(1500) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `f_inicio` datetime NOT NULL,
  `f_fin` datetime NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`expediente`, `juicio`, `actor`, `demandado`, `u_act`, `etapa`, `a_por_realizar`, `observaciones`, `tipo`, `f_inicio`, `f_fin`, `estado`) VALUES
('1017/2007', 'SUCESORIO INTESTAMENTARIO A BIENES DE JESUS TEOFILO ARIAS Y OTROS', 'MARIA DE LOS ANGELES ARIAS GUTIERREZ', '', '', '', 'PROYECTO DIVISIÓN HEREDEROS', '**Acuerdi 17/10/2022 improcedente entrega inmueble?', 'familiar', '2023-06-03 21:27:30', '2023-06-03 21:27:30', 'Abierto'),
('1020/2019', 'JUICIO SUMARIO CIVIL DE ALIMENTOS DEFINITIVOS', 'BALTAZAR ARJONA SALAZAR ', 'ELSA ELVIRA ARJONA LIMAS Y OTROS', '05/07/2021 BAJA TEMPORAL', '', '**PENDIENTE LLAMAR A SEÑORA ARJONA', '', 'familiarrr', '2023-06-20 00:00:00', '2023-06-08 22:57:34', 'Cerrado'),
('1027/2020', 'DIVORCIO INCAUSADO ', 'MARIA TERESA GOYTORTU RIVERA', 'ROGELIO SOLIS GALVAN', '', '', 'PDTE. SEGUIMIENTO EXHORTO ELECTRONICO PARA EMPLAZAR AL DEMANDADO (OFICIO 1521 23/03/2022)', 'EXHORTO MATAMOROS?? PAGO DE EXHORTO ACUERDO 22/06/2021', 'familiar', '0000-00-00 00:00:00', '2023-06-13 23:27:11', 'Cerrado'),
('1035/2017', 'SUCESORIO INTESTAMENTARIO A BIENES DE FLORENTINO MARTINEZ MARTINEZ', 'MA. DE LOS ANGELES HACES  GUILLEN, MARIA FERNANDA MARTINEZ HACES, MARIA JOSE MARTINEZ HACES', '', '', '', '**PTE. PAGO DE COPIAS PARA PROTOCOLIZACIÓN?', '', 'familiarr', '0000-00-00 00:00:00', '2023-06-17 23:32:21', 'Abierto'),
('1051/2022', 'DIVORCIO INCAUSADO', 'CARLOS MARIO BALBOA CASANOVA', 'DENISSE ANAHI MARTINEZ MORENO', 'acuerdo de fecha 22/03/2023 ordeno de nueva cuenta emplazamiento a demandada en su fuente de trabajo', '', '', 'mediante aucerdo 03/02/2023 se resolvió procedente acumulación, la cual causó estado en fecha 15/02/2023', 'familiarr', '0000-00-00 00:00:00', '2023-01-23 11:32:42', 'Abierto'),
('1081/2018', 'SUCESION TESTAMENTARIA A BIENES DE MARIA GUADALUPE RAMIREZ MONTALVO', 'ANGEL ALFREDO JIMENEZ RAMIREZ', '', '', '', 'MEDIANTE ESCRITO DE FECHA 23/01/2020 SE EHXIBIERON CESIONES DE DERRECHOS SE DIJO QUE PREVIO ACORDAR LO SOLICITADO SE DEBERIA GIRAR ATENTO OFICIO AL DEPARTAMENTO DE ARCHIVO PREVIO PAGO DE DERECHOS ', '', 'familiarrr', '0000-00-00 00:00:00', '2023-01-02 23:32:50', 'Cerrado'),
('1087/2022', 'ALIMENTOS DEFINITIVOS', 'JESSICA JAZMIN HERNANDEZ BRICEÑO', 'JULIO EDGAR HERNANDEZ AGUILAR', 'SE SOLICITÓ OFICIOS LOCALIZACIÓN DEMANDADO', '', '', '', 'familiarrr', '0000-00-00 00:00:00', '2023-01-03 23:33:09', 'Abierto'),
('1092/2022', 'JURIS. VOL. CAMBIO DE REGIMEN PATRIMONIAL, ALIMENTOS Y OTROS', 'CYNTHIA ESTEFANIA RUIZ GUEVARA Y CARLOS ALBERTO ENRIQUEZ GARCIA', '', 'En fecha 14/12/2022 se emitió sentencia declarando procedente todo lo peticionado por los comparecientes', '', 'Pte. seguimiento exhorto mante para inscripción de cambio de regimen ', '', 'familiarr', '0000-00-00 00:00:00', '2023-01-18 00:00:00', 'Cerrado'),
('1099/2013', 'SUCESORIO TESTAMENTAIO A BIENES DE MARIA GUADALUPE LEAL GARZA ', 'MA. DEL SOCORRO MTZ. LEAL ', '', '', '', '**SOLICITAR SE LIBEREN OFICIOS ORDENADOS COMO INFORME DE AUTORIDAD (PRUEBAS)', 'ALEJANDRO DIAZ INCIDENTE RENDICIÓN DE CUENTAS', 'familiar', '0000-00-00 00:00:00', '2023-01-18 00:00:00', 'Abierto'),
('110/2023', 'GUARDA Y CUSTODIA DEFINITIVA', 'REYES REYNA ZAPATA, SANDRA RODRIGUEZ ESTRADA', 'YAHAIRA LIZETH GOMEZ ALONSO, REYES REYNA RODRIGUEZ\n', 'admisión de pruebas', '', 'pendiente desahogo de diversas pruebas, ya s eenucnetran agendadas', '', 'familiarr', '0000-00-00 00:00:00', '2023-01-02 00:00:00', 'Abierto'),
('1122/2020', 'JUICIO SUCESORIO INTESTAMENTARIO A BIENES DE RAFAEL RODRIGUEZ PADILLA', 'CLAUDIA DANIELA RODRIGUEZ TOVAR Y OTROS', '', 'SE PRESENTÓ ESCRITO AUTORIZANDO ABOGADO, DOMICILIO Y CORREO ELECTRÓNICO 01/06/2022', '', 'SIN AUTORIZACIÓN EN T.E.', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('1133/2022', 'JUICIO ORDINARIO CIVIL SOBRE  TERMINACIÓN DE CONTRATO DE COMODATO', 'JOSE NATIVIDAD HERNANDEZ MATA ', 'RAUDEL UREÑO HERRERA', 'Sentencia 30/03/2023', '', '', 'PRINCIPAL Y RECONVENCIÓN', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('1140/2022', 'DIVORCIO INCAUSADO', 'DENISSE ANAHI MARTINEZ MORENO', 'CARLOS MARIO BALBOA CASANOVA', 'MEDIANTE OFICIO 752/2023 JUZGADO SEGUNDO REQUIRIÓ LA ACUMULACIÓN AL DIVERSO 1051/2022 DE ESE JUZGADO, SE OTORGÓ TÉRMINO DE 3 DÍAS A LAS PARTES PARA QUE MANIFESTARAN LO QUE A SU DERECHO OCNVINIERA', '', 'MEIDANTE ESCRITO 13/02/2023 SE DESAHOGO LA VISTA MANIFETSANDO SER CONFORMES CON ACUMULACIÓN', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('1176/2014', 'JURISDICCION VOLUNTARIA SOBRE DECLARACION DE AUSENCIA DEL SEÑOR JORGE LUIS URBINA DELGADO ', 'PATRICIO URBINA DELGADO ', '', 'CITACIÓN PARA SENTENCIA 24/03/2023', '', '', '', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('118/2022', 'DIVORCIO INCAUSADO', 'CINTHYA MARGARITA MEZA MORAN', 'ADOLFO SALAZAR AGUIRRE', 'SE EMITIÓ SENTENCIA EN FECHA 25/02/2022', '', 'PTE. INCIDENTE', '', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('1187/2022', 'JURIS. VOLUNTARIA NOMBRAMIENTO DE TUTOR', 'MARIANA ACOSTA VEGA Y JUAN JOSÉ BUTRON BALBOA', '', 'MEDIANTE PROMOCIÓN ELECTRÓNICA DE FECHA 30/03/2023 SE SOLICITÓ SE GIREN OFICIOS LOCALIZACIÓN PADRE DE MENOR', '', '', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('127/2018', 'SUCESORIO INTESTAMENTARIO A BIENES DE NORMA DEBORA TREVIÑO VAZQUEZ  ', 'PATRICIA EUGENIA LEHMANN VAZQUEZ', '', 'AMPARO INDIRECTO 2155/2022 VS RESOLUCIÓN TOCA 94/2022', '', 'SOLICITAR SE NOTIFIQUE A VIUDA DE 2 COHEREDEROS; HAY QUE SOLICITAR INTERRUPCIÓN DE PROCEDIMIENTO, ART. 100 FRACC. I', '', 'familiarrr', '0000-00-00 00:00:00', '2023-06-02 23:38:18', 'Abierto'),
('1364/018', 'JUICIO SUCESORIO INTESTAMENTARIO A BIENES DE LAZARO ORNELAS BARRON', 'ADALBERTO GUEVARA MONTEMAYOR ', '', 'MEDIANTE ACUERDO DE FECHA  11/06/2022 SE TUVO SEÑALANDO DOMICILIO, ABOGADOS Y CORREO', '', 'CITAR DOCTORA CONY; REVISAR EXPEDIENTE PARA IMPUL$$AR', '', 'familiarrr', '0000-00-00 00:00:00', '2023-06-05 00:00:00', 'Abierto'),
('1364/2010', 'DIVORCIO VOLUNTARIO', 'CLAUDIA PATRICIA TOVAR TINAJERO, RAFAEL RODRIGUEZ PADILLA', '', 'se relaciona con diverso sucesorio??', '', '', '', 'familiarr', '0000-00-00 00:00:00', '2023-06-02 23:38:47', 'Cerrado'),
('1446/2019', 'JUICIO SUMARIO CANCELACIÓN ALIMENTOS', 'FERNANDO ZAMUDIO IZAGUIRRE ', 'ELIZABETH ALFARO MARTINEZ', '**SE EMITIÓ RESOLUCIÓN EN FECHA 12/10/2022 (NO SE HA LIBERADO)', '', '', '', 'familiar', '0000-00-00 00:00:00', '2023-06-04 00:00:00', 'Cerrado'),
('171/2016', 'DVORCIO VOLUNTARIO', 'ALEJANDRO GARZA PAREDES Y DIANA PAOLA ROMO BALCONI', '', 'MEDIANTE ESCRITO  PRESENTADO EN FECHA 03/01/2023 SE AUTORIZÓ ABOGADO, DOMICILIO Y CORREO ELECTRÓNICO', '', '', '*ANTECEDENTE DE INCIDENTE DE REDUCCIÓN DE PENSIÓN ALIMENTICIA', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('206/2019', 'Laboral', 'José Miguel Rodriguez Vega', 'Universidad de seguridad y justicia', 'Audiencia de pruebas', 'Citar Laudo', 'Revisar Expediente fisico', 'Procedente', 'laborales', '2023-05-03 01:00:00', '2023-08-30 01:00:00', 'Abierto'),
('240/2021', 'SUCESORIO TESTAMENTARIO A BIENES DE JOS NATIVIDAD HERNANDEZ ', 'MA. LYDIA MATA ORTIZ Y OTRROS ', '', '', '', 'EN FECHA 25/04/2022 SE EMITIÓ SENENCIA DE SEGUNDA SECCIÓN; en fecha 11/05/2022 SE APROBÓ INVENTARIO Y AVALUO', 'TODA VEZ QUE UN TERCERO OSTENTA LA PROPIEDAD DEL INMUEBLE QUE CONFORMA CAUDAL HEREDITARIO, SE ORDENÓ NOTIFICAR LA RADICACIÓN DE DICHO JUICIO; ACTUALMENTE SE ECUENTRA EN TRÁMITE JUICIO DE TERMINACIÓN DE COMODATO', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('240/2022', 'SUCESORIO INTESTAMENTARIO', 'MARCO ANTONIO MUÑOZ GOMEZ', '', '', '', '', '', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('244/2017', 'SUCESORIO INTESTAMENTARIO A BIENES DE RICARDO DIAZ FRIAS', 'MIREYA BERENICE TERAN DIAZ', '', 'ACUERDO DE FECHA 29/04/2019, BAJA CON EFECTOS DE TRÁMITE ADMINITRATIVO POR INACTIVIDAD', '', '', 'REVISAR EXPEDIENTE JUZGADO CITAR A SEÑORA MIREYA', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('248/2020', 'DIVORCIO INCAUSADO ', 'YHERLIM SORAIMA LOPEZ VILLAFUERTE ', 'JUAN MANUEL MTZ. DIAZ', 'dsad', '', 'REITERAR SOLICITANDO MEDIACIÓN', 'archivo', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('291/2023', 'Juicio Sumario Civil sobre de Terminación de Contrato de Comodato', 'José Natividad Hernandez  Mata', 'Raudel Ureño Herrera', 'Apelación adhesiva', 'Apelación', 'Esperar Sentencia', 'Magistrado Ponente Primera Sala Colegiada', 'apelaciones', '2023-07-06 01:00:00', '2023-07-14 01:00:00', 'Abierto'),
('315/2015', 'JUICIO SUMARIO CIVIL', 'FELICIA CANALES VIDALES', 'GUADALUPE LUCIA FLORES GARZA', 'En fecha 16/02/2023 causó ejecutoria sentencia dictada el  18/01/2023', '', '', 'Mediante sentencia de fecha 18/01/2023 se declaró sin materia el juicio', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('369/2023', 'JURISDICCIÓN VOLUNTARIA AUTORIZACIÓN PARA QUE MENOR DE EDAD SALGA DEL PAÍS', 'LUCERO LIZETH HERRERA MARQUEZ', '', '', '', 'RADICACIÓN 22/03/2023', '', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('41/2021', 'JUICIO ORDINARIO CIVIL SOBRE FIJACION DE REGLAS DE CONVIVENCIA ', 'HELIODORO CONTRERAS TOVAR Y OTRO ', 'LUIS FERNANDO ORTA PARRAS ', '', '', 'PENDIENTE REMITIR BOLETA EMPLAZAMIENTO DIAS Y HORAS INHABILES (LIC. ROSALVA VAZQUES)', '', 'familiar', '2023-06-14 22:58:52', '2023-06-12 03:58:58', 'Cerrado'),
('412/2019', 'Laboral vs CONAFOR', 'Maria Del Pilar Zea Lopez', 'Comisión Nacional Forestal', 'Se exhibieron pruebas supervinientes ', 'Laudo', 'Consultar el expediente fisico', 'Procedente', 'laborales', '2022-12-12 01:00:00', '2023-08-01 01:00:00', 'Abierto'),
('45/2021', 'SUCESORIO INTESTAMENTARIO A BIENES DEL NALLELY GUADALUPE CONTRERAS MALDONADO ', 'HELIODORO CONTRARAS TOVAR Y OTRO', '', '', '', 'PREVIO A DICTAR RESOLUCIÓN SE REQUIRIÓ DOMICILIO DONDE PUEDA SER LOCALIZADO EL C. LUIS FERNANDO ORTA PARRAS', '', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('476/2016', 'SUCESORIO INTESTAMENTARIO A BIENES DE CARLOS ALBERTO HERNANDEZ S.', 'BLANCA HILDA OLIVO MALDONADO ', '', 'APELACIÓN TOCA 58/2019', '', 'SOLICITAR CADUCIDAD, EN VIRTUD DE HABERSE DEJADO DE ACTUAR POR MÁS DE 6 MESES', 'NO HAY CONSTANCIA DE QUE SE HAYA NOTIFICADO CADUCIDAD ALBACEA', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('481/2023', 'SUCESORIO ', 'VANESSA LIZETH MORENO AGUIRRE', '', '', '', '', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('496/2020', 'DECLARACION DE PATERNIDAD', 'GRECIA DEL CARMEN MAGAÑA DOMINGUEZ', 'GILBERTO RDZ. RIVERA', '', '', '', 'LIC. MIGUEL MTZ ', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('611/2022', 'DIVORCIO INCAUSADO', 'DIEGO DE LA ROSA VILLAFRANCA', 'AIRIN HARUMI TORRES LLORENTE', 'EN FECHA 16/02/2023 SE TUVO POR CONTETANDO INCIDENTE DE INCOMPETENCIA PLANTEADO POR DEMANDADA', '', '**SOLIICTAR SE ABRA A PRUEBAS INCIDENTE', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('630/2022', 'DIVORCIO INCAUSADO', 'BIBIANA CASTILLO TORRES', 'MIGUEL EMILIO MORENO ORTEGA', '', '', '**SOLICITAR CAUSE EJECUTORIA SENTENCIA DIVORCIO', '', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('639/2021', 'SUCESORIO INTESTAMENTARIO JOSE MARIO CANDIDO HERNANDEZ JUAREZ  Y ANA MARIA LIMON ALCOCER ', 'OLGA HERNANDEZ LIMON ', '', 'SE EMITIÓ SENTENCIA ADJUDICACIÓN 08/04/2022', '', 'MEDIANTE ACUERDO DE FECHA 15/11/2022 CAUSÓ EJECUTORIA SENTENCIA DE FECHA 08/04/2022', '**QUEDÓ PENDIENTE EXHIBIR CERTIFICADO DE PROPIEDAD DE UN INMUEBLE Y DOCUMENTOS DE CUENTAS BANCARIAS ', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('641/2019', 'DIVORCIO INCAUSADO', 'SILVIA ELIZABETH CAMERO SALAZAR', 'SERGIO BECERRA OCEGUEDA', 'EN FEBRERO SE PRESENTÓ PRMOCIÓN AUTORIZANTO ABOGADO, DOMICILIO CORREO LECTRÓNICO', '', '**NO HA SIDO POSIBLE EMPLAZAR A DEMANDADO; IMPULSAR NOTIFICACIÓN POR EDICTOS????', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('699/2022', 'DIVORCIO INCAUSADO', 'MARIA GUADALUPE RODRIGUEZ VAZQUEZ', 'SERGIO ANTONIO HERNANDEZ MEDINA', 'SENTENCIA DE FECHA 11/08/2022', '', 'PTE. SOLICITAR CAUSE EJECUTORIA Y SOLICITAR FECHA MEDIACIÓN ', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('728/2021', 'JUICIO ORDINARIO CIVIL SOBRE NULIDAD DE JUICIO CONCUIDO', 'ELSA MARGARITA GARCIA GUEVARA ', 'GUADALUPE GARCIA GUEVARA Y OTROS', '', '', 'GESTIONAR NOTIFICACIÓN ORDENADA A DIVERSOS DOMICILIOS DE TERCER LLAMADO A JUICIO', 'LIC. MIGUEL MARTINEZ **IMPULSAR', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('751/2021', 'DIVORCIO INCAUSADO', 'MARIA DEL PILAR SERRANO COVARRUBIAS', 'OSBALDO GARCIA CASTILLO', '', '', '??', 'AUTORIZADOS POR PARTE DEMANDADA', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('779/2018', 'ALIMENTOS DEFINITIVOS', 'DIANA PAOLA ROMO BALCONI', 'ALEJANDRO GARZA OAREDES', 'ESCRITO DESIGNANDO ABOGADOS, DOMICILIO Y CORREO 03/01/2023', '', '', '', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('782/2021', 'DIVORCIO INCAUSADO', 'MARGARITA GÓMEZ YAÑEZ', 'LUIS FRANCISCO LÓPEZ RAMOS', 'SE EMITIÓ SENTENCIA EN FECHA 26/08/2021', '', 'PTE INCIDENTE Y RECURSOS', 'LIC. ALEJANDRO DIAZ', 'familiarr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('79/2014', 'Pension', 'Julia Macarena Andrade Mireles', 'Instituto Mexicano del Seguro Social', 'Requerimiento del cumplimiento de laudo', 'Ejecución', 'Acudir a la subdelegacion con Gerardo Nuñez para la incorporación del padron de pension', 'Cobro de Pension', 'laborales', '2014-08-02 01:00:00', '2023-08-31 01:00:00', 'Abierto'),
('795/2022', 'SUCESORIO INTESAMENTARIO', 'LIDUVINA ALFARO MALDONADO', '', 'SE ENVIÓ PROMOCIÓN ELECTRÓNICA CITANDO RESOLUCIÓN 1A SECCIÓN 04/04/2023', '', '', '', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('831/1991', 'SUCESORIO INTESTAMENTARIO', 'ELSA MARGARITA GARCIA GUEVARA Y OTROS', '', '27/10/2022 CAUSÓ EJECUTORIA RESOLUCIÓN ACUMULACIÓN- PTE.  ENVIAR OFICIO J° 3° PARA QUE REMITA EXPEDIENTE', '', 'OFICIO 5297 DE ECHA 27/10/2022 FUE RECIBIDO POR EL JUEZ 3° EN FECHA 05/01/2023, EMITIENDO DICHO JUZGADO EL ACUERDO RESPECTIVO EN FECHA 23/01/2023, DETERMINANDO REMITIR EL EXPEDIENTE DE MÉRITO AL JUEZ DE ORIGEN QUE SOLICITÓ LA ACUMULACIÓN, CERTIFICANDO QUE LAS PARTES NOREALIZARON MANIFESTACIÓN ALGUNA AL RESPECTO.\n\n', 'LIC. MIGUEL MARTINEZ', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('858/2022', 'SUCESORIO TESTAMENTARIO', 'SUCESION TESTAMENTARIA.- ALBA LOURDES ARELLANO RODRÍGUEZ, ALMA ALICIA ARELLANO RODRÍGUEZ, ELISEO ARELLANO RODRÍGUEZ, JUAN JOSÉ ARELLANO RODRÍGUEZ, LAMBERTO ROMAN ARELLANO RODRÍGUEZ, MA. GUADALUPE GRACIELA ARELLANO RODRÍGUEZ , ELISEO ARELLANO MIRELES\n', '', 'MEDIANTE ACUERDO DE FECHA 26/08/2022 SE TUVO DESIGNANDO ABOGADO, DOMICILIO, CORREO', '', '***EN TRAMITE INCIDENTE OPOSICION INVENTARIO Y AVALUO- ABRIR A PRUEBAS?---MEIDANTE AUCUERDO DE FECHA 31/03/2023 SE TUVO POR NOTIFICADO DE DICHO INCIDENTE A  COHEREDEROS', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('904/2019', 'DIVORCIO INCAUSADO ', 'JORGE ALBERTO CASTRO MORENO ', ' MINERVA DE LOS REYES GARZA', '', '', 'SE DECRETE MEDIDA DE ALIMENTOS ', 'LIC. MIGUEL MARTINEZ', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('945/2021', 'SUCESORIO INTESTAMENTARIO', 'SAMUEL SLATIEL ROCHA CARMONA', '', 'EL 18 DE ENERO DE PRESENTÓ PROMOCIÓN ATORIZANDO ABOGADOS, DOMICILIO Y CORREOS ELECTRÓNICOS', '', '', 'LIC. MIGUEL MARTINEZ', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('95/2019', 'JUICIO SUCESORIO INTESTAMENTARIO A   BIENES DE MARIA ESTHER VEGA LINARES ', 'C. ZELYDEH ESTHER PERALES VEGA Y OTROS.', '', '30/11/2020 BAJA TEMPORAL', '', 'SOLICITAR SE MANDE PEDIR INFORME AL INE SOBRE DOMICILIO DE CONYUGE SUPERSTITE??', 'J. IGNACIO ZUÑIGA', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('964/2014', 'DIVIRCIO VOLUNTARIO', 'JORGE MAURICIO MONTANTES Y RODRIGUEZ Y ANGELICA MENDOZA AHGUIRRE', '', 'MEDIANTE ACUERDO DE FECHA  25/11/2022 SE TUVO SEÑALANDO DOMICILIO, ABOGADOS Y CORREO, SOLICITANDO COPIAS CERTIFICADAS URGENTES', '', 'PTE. PAGO DE COPIAS ', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('975/2021', 'SUCESORIO TESTAMENTARIO', 'GRACIELA CARDENAS LLANOS, ROSA MARIA CARDENAS LLANOS , MA. GUADALUPE LLANOS SALDIVAR', '', 'MEDIANTE ACUERDO DE FECHA 11/01/2023 SE APROBO TERCERA SECCIÓN SIGNADA POR TODOS LOS HEREDEROS', '', '', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto'),
('978/2020', 'DIVORCIO INCAUSADO', 'KATIA KARINA HERNANDEZ MURO ', 'WILSON ANTONIO BATISTA DELGADO', '', '', 'PDTE. DILIGENCIAR  CARTA ROGATORIA PARA INSCRIPCION DE DIVORCIO/ INSCRIPCIÓN DE DIVORCIO EN REGISTRO CIVIL', 'archivo', 'familiar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cerrado'),
('987/2022', 'JUICIO ORDINARIO CIVIL SOBRE NULIDAD DE RECONOCIMIENTO DE PATERNIDAD', 'DORA ALICIA PALACIOS GUEVARA', 'ELIUD ESAU ORTIZ GUERRA Y/O EL', 'MEIDANTE ACUERDO DE FECHA 01/03/2023 SE TUVO OFRECIENDO PRUEBAS', '', 'PENDIENTE DESAHOGO ADN', '', 'familiarrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abierto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apaterno` varchar(15) NOT NULL,
  `amaterno` varchar(15) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `colonia` varchar(60) NOT NULL,
  `calle` varchar(90) NOT NULL,
  `num_ext` int(11) NOT NULL,
  `num_int` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `divicion` varchar(10) NOT NULL,
  `Ocupacion` varchar(100) NOT NULL,
  `Escolaridad` varchar(100) NOT NULL,
  `Fecha_nac` date NOT NULL,
  `estcivil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apaterno`, `amaterno`, `estado`, `ciudad`, `colonia`, `calle`, `num_ext`, `num_int`, `telefono`, `divicion`, `Ocupacion`, `Escolaridad`, `Fecha_nac`, `estcivil`) VALUES
(1, 'José Natividad', 'Hernandez ', 'Mata', 'Tamaulipas', 'Victoria', 'Caminera', '29 y 30 Olivia Ramirez', 0, 0, '8343012092', 'actor', 'Empleado del ISSTE', 'Odontologo', '1981-09-02', 'Unión Libre'),
(2, 'José Miguel', 'Rodriguez', 'Vega', 'Tamaulipas', 'Victoria', 'Echeverría', 'NA', 0, 0, '8341625327', 'actor', 'Director Administrativo de la Universidad de Seguridad y Justicia', 'Maestría', '2023-01-01', 'Casado'),
(3, 'Maria Del Pilar', 'Zea', 'Lopez', 'Tamaulipas', 'Victoria', 'Fraccionamiento Los Mirlos', 'NA', 0, 0, '8343011230', 'actor', 'Desempleada', 'Maestria en contabilidad', '2023-11-11', 'Madre Soltera'),
(4, 'Julia Macarena', 'Andrade', 'Mireles', 'Tamaulipas', 'Victoria', 'Haciendas del Bosque', 'Olmos', 538, 538, '8341857607', 'actor', 'Labores del Hogar', 'Primaria truncada', '1900-01-01', 'Viuda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `fein` datetime NOT NULL,
  `fefi` datetime NOT NULL,
  `ubicacion` varchar(5000) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id_expediente` int(11) NOT NULL,
  `expediente` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id_expediente`, `expediente`, `id_usuario`) VALUES
(2, '291/2023', 1),
(4, '206/2019', 1),
(5, '79/2014', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gracasos`
--

CREATE TABLE `gracasos` (
  `Estado` varchar(30) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gracasos`
--

INSERT INTO `gracasos` (`Estado`, `Cantidad`) VALUES
('Abierto', 34),
('Cerrado', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `histact`
--

CREATE TABLE `histact` (
  `idhist` int(11) NOT NULL,
  `expediente` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `Actividad` varchar(1500) NOT NULL,
  `f_ini` date NOT NULL,
  `f_fin` date NOT NULL,
  `etapa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `histact`
--

INSERT INTO `histact` (`idhist`, `expediente`, `id_usuario`, `Actividad`, `f_ini`, `f_fin`, `etapa`) VALUES
(1, '291/2023', 1, 'Esperar Sentencia', '2023-07-06', '2023-07-14', 'abierta'),
(4, '412/2019', 1, 'Consultar el expediente fisico', '2022-12-12', '2023-08-01', 'abierta'),
(5, '206/2019', 1, 'Revisar Expediente fisico', '2023-05-03', '2023-08-30', 'abierta'),
(6, '79/2014', 1, 'Acudir a la subdelegacion con Gerardo Nuñez para la incorporación del padron de pension', '2014-08-02', '2023-08-31', 'abierta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apaterno` varchar(20) NOT NULL,
  `amaterno` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `contrasenia` varchar(15) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `etiqueta` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apaterno`, `amaterno`, `telefono`, `correo`, `contrasenia`, `cargo`, `etiqueta`) VALUES
(1, 'OJOC', 'Oscar Jaime ', 'Orozco', 'Candanosa', '8343116450', 'despacho.jaime.orozco@gmail.com', 'Loky2001', 'San Pedro', '<iframe src=\"https://calendar.google.com/calendar/embed?src=despacho.jaime.orozco%40gmail.com&ctz=America%2FMexico_City\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>'),
(5, 'CVSA', 'Cinthia Victoria', 'Sanchez', 'Andrade', '8341798611', 'despachoabogadodeldiablo@gmail.com', 'CVSA', 'Usuario', '<iframe src=\"https://calendar.google.com/calendar/embed?src=despacho.jaime.orozco%40gmail.com&ctz=America%2FMexico_City\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actexp`
--
ALTER TABLE `actexp`
  ADD PRIMARY KEY (`Id_actexp`),
  ADD KEY `expediente` (`expediente`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id_expediente`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `expediente` (`expediente`);

--
-- Indices de la tabla `gracasos`
--
ALTER TABLE `gracasos`
  ADD PRIMARY KEY (`Estado`);

--
-- Indices de la tabla `histact`
--
ALTER TABLE `histact`
  ADD PRIMARY KEY (`idhist`),
  ADD KEY `expediente` (`expediente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actexp`
--
ALTER TABLE `actexp`
  MODIFY `Id_actexp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  MODIFY `id_expediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `histact`
--
ALTER TABLE `histact`
  MODIFY `idhist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actexp`
--
ALTER TABLE `actexp`
  ADD CONSTRAINT `actexp_ibfk_1` FOREIGN KEY (`expediente`) REFERENCES `caso` (`expediente`),
  ADD CONSTRAINT `actexp_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD CONSTRAINT `expedientes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `expedientes_ibfk_2` FOREIGN KEY (`expediente`) REFERENCES `caso` (`expediente`);

--
-- Filtros para la tabla `histact`
--
ALTER TABLE `histact`
  ADD CONSTRAINT `histact_ibfk_1` FOREIGN KEY (`expediente`) REFERENCES `caso` (`expediente`),
  ADD CONSTRAINT `histact_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
