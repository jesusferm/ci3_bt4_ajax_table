-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2019 at 10:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ajax_pagination`
--
CREATE DATABASE IF NOT EXISTS `ci_ajax_pagination` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `ci_ajax_pagination`;

-- --------------------------------------------------------

--
-- Table structure for table `ajx_posts`
--

DROP TABLE IF EXISTS `ajx_posts`;
CREATE TABLE IF NOT EXISTS `ajx_posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `fc_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nom_post` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desc_post` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ajx_posts`
--

INSERT INTO `ajx_posts` (`id_post`, `fc_post`, `nom_post`, `desc_post`) VALUES
(1, '2019-08-08 16:14:20', 'Activar tecla retroceso para regresar a la carpeta anterior en nautilus', ''),
(2, '2019-08-08 16:14:20', 'Extensión de gnome-shell que no te deben faltar', ''),
(3, '2019-08-08 16:14:20', 'Cambiando imagen del login de fedora', ''),
(4, '2019-08-08 16:14:20', 'Cambiando íconos en fedora 20', ''),
(5, '2019-08-08 16:14:20', 'Optimizar el peso de archivos pdf', ''),
(6, '2019-08-08 16:14:20', 'Una consola elegante...', ''),
(7, '2019-08-08 16:14:20', 'Instalar zshell en fedora', ''),
(8, '2019-08-08 16:14:20', 'Hacer que una maquina virtual detecte USB fedora 20', ''),
(9, '2019-08-08 16:14:20', 'Activar/desactivar SeLinux en fedora', ''),
(10, '2019-08-08 16:14:20', 'Recuperar grub en elementary OS luna junto con windows 8', ''),
(11, '2019-08-08 16:14:20', 'Cómo cambiar el idioma de las páginas MAN', ''),
(12, '2019-08-08 16:14:20', 'Reducir peso de un archivo PDF en Linux', ''),
(13, '2019-08-08 16:14:20', 'Convertir DEB a RPM con ALIEN (y viceversa)', ''),
(14, '2019-08-08 16:14:20', 'Crear ventanas jdialoge tipo modal', ''),
(15, '2019-08-08 16:14:20', 'Abrir desde un jframe un jdialog modal que se cierre después de un tiempo', ''),
(16, '2019-08-08 16:14:20', 'Aplicaciónes indispensables en fedora gnome', ''),
(17, '2019-08-08 16:14:20', 'Java - Hilos Thread JFrame', ''),
(18, '2019-08-08 16:14:20', 'Mostrar icono de aplicaciones de windows en Gnome fedora 20', ''),
(19, '2019-08-08 16:14:20', 'Recibir datos desde arduino utilizando una interfaz en java', ''),
(20, '2019-08-08 16:14:20', 'Qué hacer después de instalar fedora 20 \"Heisenbug\" con escritorio gnome?', ''),
(21, '2019-08-08 16:14:20', 'Cambiar el motor de línea de comándos en fedora - linux', ''),
(22, '2019-08-08 16:14:20', 'Recuperar archivos de usb o hdd con foremost', ''),
(23, '2019-08-08 16:14:20', 'Instalar MySQL Server y MysqlWorkbech en fedora 20 usando paquetes descargados', ''),
(24, '2019-08-08 16:14:20', 'Cómo configurar gt-recordMyDesktop para grabar tu escritorio sin problemas Gtk', ''),
(25, '2019-08-08 16:14:20', 'Cambiar la dirección MAC a la tarjeta de red de tu laptop con macchanger', ''),
(26, '2019-08-08 16:14:20', 'Punteros en programas arduino', ''),
(27, '2019-08-08 16:14:20', 'Instalación de processing en fedora', ''),
(28, '2019-08-08 16:14:20', 'Agregar un JCalendar a la paleta de componentes de netbeans', ''),
(29, '2019-08-08 16:14:20', 'Obtener fecha del sistema y colocarlo en un JDateChooser Java', ''),
(30, '2019-08-08 16:14:20', 'Script que avisa el estado de la carga de la batería de la laptop linux', ''),
(31, '2019-08-08 16:14:20', 'Crear instalador de aplicación programada en Visual Basic', ''),
(32, '2019-08-08 16:14:20', 'Reproducir sonido en segundo plano usando hilos en java', ''),
(33, '2019-08-08 16:14:20', 'Altas, Bajas, Consultas y Modificaciones desde aplicación java usando BD en mysql', ''),
(34, '2019-08-08 16:14:20', 'Instalar PostgreSQL y pgAdmin III en fedora', ''),
(35, '2019-08-08 16:14:20', 'Matrices dinámicas en C', ''),
(36, '2019-08-08 16:14:20', 'Reproducir sonidos en java, usando player y de forma más simples.', ''),
(37, '2019-08-08 16:14:20', 'Descargar una página web con wget', ''),
(38, '2019-08-08 16:14:20', 'Instalación y uso de ClamAV', ''),
(39, '2019-08-08 16:14:20', 'Kingsoft Office una alternativa a Microsoft Office', ''),
(40, '2019-08-08 16:14:20', 'Cronómetro en java', ''),
(41, '2019-08-08 16:14:20', 'Crear alias para facilitar tareas en comando de linux', ''),
(42, '2019-08-08 16:14:20', 'Instalación guestadition de VirtualBox en Kali Linux', ''),
(43, '2019-08-08 16:14:20', 'Instalar ZSH en kali Linux', ''),
(44, '2019-08-08 16:14:20', 'Conocer información de nuestro sistema', ''),
(45, '2019-08-08 16:14:20', 'Instalando temas de gnome shell', ''),
(46, '2019-08-08 16:14:20', 'Instalar VirtualBox en fedora', ''),
(47, '2019-08-08 16:14:20', 'Truco en Windows 8', ''),
(48, '2019-08-08 16:14:20', 'Cómo elegir el mejor entorno de escritorio de Linux para ti', ''),
(49, '2019-08-08 16:14:20', 'Graficar puntos en Gnuplot desde C', ''),
(50, '2019-08-08 16:14:20', 'Funciones de membresía en c logíca difusa', ''),
(51, '2019-08-08 16:14:20', 'Agregar referencias, glosario y acronimos en archivos Latex', ''),
(52, '2019-08-08 16:14:20', 'Insertar código de programas en Latex', ''),
(53, '2019-08-08 16:14:20', 'Sistema de control Takagi-Sugeno en C', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
