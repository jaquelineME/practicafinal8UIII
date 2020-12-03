-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_proveedores
CREATE DATABASE IF NOT EXISTS `bd_proveedores` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_proveedores`;

-- Volcando estructura para tabla bd_proveedores.producto_30
CREATE TABLE IF NOT EXISTS `producto_30` (
  `Codigo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_proovedor1` int(11) NOT NULL,
  `Nombre_producto` varchar(100) NOT NULL,
  `Precio_unitario` int(10) NOT NULL,
  `Stock_maximo` int(5) NOT NULL,
  `Stock_minimo` int(5) NOT NULL,
  PRIMARY KEY (`Codigo_producto`),
  KEY `Codigo_proovedor1` (`Codigo_proovedor1`),
  CONSTRAINT `producto_30_ibfk_1` FOREIGN KEY (`Codigo_proovedor1`) REFERENCES `proveedor_30` (`Codigo_proovedor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_proveedores.producto_30: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `producto_30` DISABLE KEYS */;
INSERT INTO `producto_30` (`Codigo_producto`, `Codigo_proovedor1`, `Nombre_producto`, `Precio_unitario`, `Stock_maximo`, `Stock_minimo`) VALUES
	(1, 1, 'Pan blanco rebanado', 25, 70, 50),
	(2, 1, 'Panque con pasas', 20, 70, 50),
	(3, 2, 'Pasta dental', 20, 70, 50),
	(4, 2, 'Cepillo dental', 15, 70, 50),
	(5, 3, 'Frijol negro', 20, 70, 50),
	(6, 3, 'Arroz blanco', 15, 70, 50),
	(7, 4, 'Elote dorado', 10, 70, 50),
	(8, 4, 'Chiles curtidos', 17, 70, 50),
	(9, 5, 'Durazno en almibar', 25, 70, 50),
	(10, 5, 'Mermelada de fresa', 30, 70, 50);
/*!40000 ALTER TABLE `producto_30` ENABLE KEYS */;

-- Volcando estructura para tabla bd_proveedores.proveedor_30
CREATE TABLE IF NOT EXISTS `proveedor_30` (
  `Codigo_proovedor` int(11) NOT NULL AUTO_INCREMENT,
  `Razon_social` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Codigo_proovedor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_proveedores.proveedor_30: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor_30` DISABLE KEYS */;
INSERT INTO `proveedor_30` (`Codigo_proovedor`, `Razon_social`, `Direccion`, `Telefono`, `Email`) VALUES
	(1, 'Garcia Armentos S.A', 'Durango 176, Cd Juarez', '656-458-92-69', 'garciaarmentos.176@gmail.com'),
	(2, 'Grupo Modesto S.A', 'El salado 495, Chihuahua', '656-419-52-86', 'modestoasociacion@gmail.com'),
	(3, 'Belkys Luna C.V', 'Chapala 845, Guadalajara', '656-481-57-21', 'chapalanelkys@gmail.com'),
	(4, 'Arcos Dorados C.A', 'Guinea 738, Delicias', '656-147-85-20', 'arcosdorados@hotmail.com'),
	(5, 'Grupo Melendez S.A', 'Diamante 512, Mazamitla', '656-861-95-37', 'losmelendez@gmail.com');
/*!40000 ALTER TABLE `proveedor_30` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
