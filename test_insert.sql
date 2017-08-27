INSERT INTO inventory (location) values ('Southern Virginia');
INSERT INTO model (name, max_price, min_price, Brandname)  
	SELECT name, max_price, min_price, Brandname FROM model WHERE NOT ('model1' IN (SELECT name FROM model)) AND max_price = 10000 AND min_price = 1 and Brandname = 'brand1';
INSERT INTO car (make, Inventoryinventory_id, Modelname, year, body_type) values ('make1', (
	SELECT inventory_id from inventory where location = 'Southern Virginia' group by location), 'model1', 2017 , 'bodytype1');