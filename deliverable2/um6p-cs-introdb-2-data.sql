USE phosphatefeeds;

LOAD DATA INFILE 'c:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/shipment.csv' 
INTO TABLE shipment 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/salesTransaction.csv' 
INTO TABLE sales_transaction 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/product.csv' 
INTO TABLE product 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/customer.csv' 
INTO TABLE customer 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/delivery.csv' 
INTO TABLE delivery 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/billOfLoading.csv' 
INTO TABLE bill_of_loading 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/transports.csv' 
INTO TABLE transports 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/fulfills.csv' 
INTO TABLE fulfills 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/isLoaded.csv' 
INTO TABLE is_loaded 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/contains.csv' 
INTO TABLE contains_product 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/belongsTo.csv' 
INTO TABLE belongs_to 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/records.csv' 
INTO TABLE records 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable2/um6p-cs-introdb-2-excelDatabases/buys.csv' 
INTO TABLE buys 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;