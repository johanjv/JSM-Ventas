DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingreso
FOR EACH ROW BEGIN
	UPDATE articulo SET stock = stock + NEW.cantidad
    WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER;