# Paginación en tablas, con ajax y codeigniter

![alt tag](./assets/app/images/web.png)
![alt tag](./assets/app/images/web1.png)
![alt tag](./assets/app/images/web2.png)

## Descripción

Éstos ejemplos son de mi autoria, son una forma de solucionar los filtrados, busquedas de registros, eliminación, agregar, y sobre todo paginar los registros de tablas usando ajax.  En éste mismo ejemplo, se incluye también la parte de paginación de ajax completo para otras secciones. 

Hay varias opciones para paginar tablas, por ejemplo está jdatatables, sin embargo a veces tarda mucho en cargar, por lo tanto no hay nada mejor que hacer uno propio, pero esa es decisión de cada uno.

Características
================
- Boostrap 4.3.1
- Codeigniter 3.1.10
- Búsqueda en tablas directo a base de datos
- Filtro usando menú desplegable
- Menú desplegable para indicar el total de registros a mostrar
- Uso de ajax para agregar registros
- Uso de ajax para eliminar registros
- Uso de ajax para la paginación
- Scritp de la base de datos

Uso
=====
	Lo primero a realizar es modificar la ruta de acceso al proyecto en el archivo config.php

Si al acceder a la ruta del proyecto desde un navegador, marcará error en la configuración de la base de datos.

Base de datos
------

**Script Base de Datos**
```
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
  `act_post` tinyint(4) NOT NULL DEFAULT 1,
  `nom_post` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desc_post` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ajx_posts`
--

INSERT INTO `ajx_posts` (`id_post`, `fc_post`, `act_post`, `nom_post`, `desc_post`) VALUES
(1, '2019-09-20 02:55:06', 0, 'Activar tecla retroceso para regresar a la carpeta anterior en nautilus', ''),
(2, '2019-09-20 03:00:42', 0, 'Extensión de gnome-shell que no te deben faltar', ''),
(3, '2019-09-20 03:00:54', 0, 'Cambiando imagen del login de fedora', ''),
(4, '2019-09-20 03:04:10', 0, 'Cambiando íconos en fedora 20', ''),
(5, '2019-09-20 03:04:16', 0, 'Optimizar el peso de archivos pdf', ''),
(6, '2019-09-20 03:04:51', 0, 'Una consola elegante...', ''),
(7, '2019-09-20 03:04:58', 0, 'Instalar zshell en fedora', ''),
(8, '2019-09-20 03:04:20', 0, 'Hacer que una maquina virtual detecte USB fedora 20', ''),
(9, '2019-09-20 03:05:01', 0, 'Activar/desactivar SeLinux en fedora', ''),
(10, '2019-09-20 03:05:04', 0, 'Recuperar grub en elementary OS luna junto con windows 8', ''),
(11, '2019-09-20 03:05:06', 0, 'Cómo cambiar el idioma de las páginas MAN', ''),
(12, '2019-08-08 16:14:20', 1, 'Reducir peso de un archivo PDF en Linux', ''),
(13, '2019-08-08 16:14:20', 1, 'Convertir DEB a RPM con ALIEN (y viceversa)', ''),
(14, '2019-08-08 16:14:20', 1, 'Crear ventanas jdialoge tipo modal', ''),
(15, '2019-08-08 16:14:20', 1, 'Abrir desde un jframe un jdialog modal que se cierre después de un tiempo', ''),
(16, '2019-08-08 16:14:20', 1, 'Aplicaciónes indispensables en fedora gnome', ''),
(17, '2019-08-08 16:14:20', 1, 'Java - Hilos Thread JFrame', ''),
(18, '2019-08-08 16:14:20', 1, 'Mostrar icono de aplicaciones de windows en Gnome fedora 20', ''),
(19, '2019-08-08 16:14:20', 1, 'Recibir datos desde arduino utilizando una interfaz en java', ''),
(20, '2019-08-08 16:14:20', 1, 'Qué hacer después de instalar fedora 20 \"Heisenbug\" con escritorio gnome?', ''),
(21, '2019-08-08 16:14:20', 1, 'Cambiar el motor de línea de comándos en fedora - linux', ''),
(22, '2019-08-08 16:14:20', 1, 'Recuperar archivos de usb o hdd con foremost', ''),
(23, '2019-08-08 16:14:20', 1, 'Instalar MySQL Server y MysqlWorkbech en fedora 20 usando paquetes descargados', ''),
(24, '2019-08-08 16:14:20', 1, 'Cómo configurar gt-recordMyDesktop para grabar tu escritorio sin problemas Gtk', ''),
(25, '2019-08-08 16:14:20', 1, 'Cambiar la dirección MAC a la tarjeta de red de tu laptop con macchanger', ''),
(26, '2019-08-08 16:14:20', 1, 'Punteros en programas arduino', ''),
(27, '2019-08-08 16:14:20', 1, 'Instalación de processing en fedora', ''),
(28, '2019-08-08 16:14:20', 1, 'Agregar un JCalendar a la paleta de componentes de netbeans', ''),
(29, '2019-08-08 16:14:20', 1, 'Obtener fecha del sistema y colocarlo en un JDateChooser Java', ''),
(30, '2019-08-08 16:14:20', 1, 'Script que avisa el estado de la carga de la batería de la laptop linux', ''),
(31, '2019-08-08 16:14:20', 1, 'Crear instalador de aplicación programada en Visual Basic', ''),
(32, '2019-08-08 16:14:20', 1, 'Reproducir sonido en segundo plano usando hilos en java', ''),
(33, '2019-08-08 16:14:20', 1, 'Altas, Bajas, Consultas y Modificaciones desde aplicación java usando BD en mysql', ''),
(34, '2019-08-08 16:14:20', 1, 'Instalar PostgreSQL y pgAdmin III en fedora', ''),
(35, '2019-08-08 16:14:20', 1, 'Matrices dinámicas en C', ''),
(36, '2019-08-08 16:14:20', 1, 'Reproducir sonidos en java, usando player y de forma más simples.', ''),
(37, '2019-08-08 16:14:20', 1, 'Descargar una página web con wget', ''),
(38, '2019-08-08 16:14:20', 1, 'Instalación y uso de ClamAV', ''),
(39, '2019-08-08 16:14:20', 1, 'Kingsoft Office una alternativa a Microsoft Office', ''),
(40, '2019-08-08 16:14:20', 1, 'Cronómetro en java', ''),
(41, '2019-08-08 16:14:20', 1, 'Crear alias para facilitar tareas en comando de linux', ''),
(42, '2019-08-08 16:14:20', 1, 'Instalación guestadition de VirtualBox en Kali Linux', ''),
(43, '2019-08-08 16:14:20', 1, 'Instalar ZSH en kali Linux', ''),
(44, '2019-08-08 16:14:20', 1, 'Conocer información de nuestro sistema', ''),
(45, '2019-08-08 16:14:20', 1, 'Instalando temas de gnome shell', ''),
(46, '2019-08-08 16:14:20', 1, 'Instalar VirtualBox en fedora', ''),
(47, '2019-08-08 16:14:20', 1, 'Truco en Windows 8', ''),
(48, '2019-08-08 16:14:20', 1, 'Cómo elegir el mejor entorno de escritorio de Linux para ti', ''),
(49, '2019-08-08 16:14:20', 1, 'Graficar puntos en Gnuplot desde C', ''),
(50, '2019-08-08 16:14:20', 1, 'Funciones de membresía en c logíca difusa', ''),
(51, '2019-08-08 16:14:20', 1, 'Agregar referencias, glosario y acronimos en archivos Latex', ''),
(52, '2019-08-08 16:14:20', 1, 'Insertar código de programas en Latex', ''),
(53, '2019-08-08 16:14:20', 1, 'Sistema de control Takagi-Sugeno en C', '');
COMMIT;
```


#### Developed By
----------------
 * linuxitos - <contact@linuxitos.com>
