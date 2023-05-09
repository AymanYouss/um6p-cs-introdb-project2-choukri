DROP DATABASE IF EXISTS phosphateFeeds;
CREATE DATABASE IF NOT EXISTS phosphateFeeds;
USE phosphateFeeds;
DROP TABLE IF EXISTS shipment, 
                     salesTransaction,
                     product,
                     customer,
                     delivery,
                     billofLoading,
                     transports,
                     fulfills,
                     isLoaded,
                     containsProduct,
                     belongsTo,
                     records,
                     buys;

CREATE TABLE Shipment (
    sid INTEGER PRIMARY KEY,
    net_quantity INTEGER,
    days_of_storage INTEGER,
    days_of_storage2 INTEGER,
    days_of_storage3 INTEGER,
    pallets VARCHAR(255),
    inspection VARCHAR(255),
    loading_date_at_plant DATE,
    quantity_removed_from_the_site INTEGER,
    stuffing_date DATE,
    sequence_date DATE,
    storage_cost REAL,
    storage_cost2 REAL,
    storage_cost3 REAL
);

CREATE TABLE Sales_Transaction (
    od INTEGER PRIMARY KEY,
    freight_invoice REAL,
    freight_invoice2 REAL,
    freight_invoice3 REAL,
    sales_order INTEGER,
    payment_terms VARCHAR(255),
    clearance_date DATE,
    payment_terms_days INTEGER,
    incoterm VARCHAR(255),
    total_volume INTEGER,
    invoice REAL,
    userComment VARCHAR(255),
    estimated_fob REAL,
    real_fob REAL,
    tdate DATE,
    Payment_status VARCHAR(255)
);

CREATE TABLE Product (
    pid INTEGER PRIMARY KEY,
    category VARCHAR(255),
    price REAL,
    branding VARCHAR(255),
    bag_size VARCHAR(255),
    weight INTEGER,
    percentage INTEGER
);

CREATE TABLE Customer (
    cid INTEGER PRIMARY KEY,
    contract_id INTEGER,
    contract_status VARCHAR(255),
    customer_name VARCHAR(255),
    customer_group VARCHAR(255)
);

CREATE TABLE Delivery (
    did INTEGER PRIMARY KEY,
    region VARCHAR(255),
    status1 VARCHAR(255),
    Status2 VARCHAR(255),
    volume_per_container INTEGER,
    estimated_freight REAL,
    country VARCHAR(255),
    discharging_port VARCHAR(255),
    type_tc VARCHAR(255),
    delivery_mode VARCHAR(255),
    ac_status VARCHAR(255),
    real_freight REAL,
    transit_time INTEGER,
    supplier VARCHAR(255),
    shipped_via VARCHAR(255),
    shipping_line VARCHAR(255),
    port_loading VARCHAR(255),
    Transporter VARCHAR(255),
    jours_half INTEGER,
    jours_1 INTEGER,
    jours_2 INTEGER,
    jours_3 INTEGER
);

CREATE TABLE Bill_of_Loading (
    cid INTEGER,
    sid INTEGER,
    blno INTEGER NOT NULL,
    bldate DATE NOT NULL,
    PRIMARY KEY (cid, sid),
    FOREIGN KEY (cid) REFERENCES Customer (cid),
    FOREIGN KEY (sid) REFERENCES Shipment (sid)
);

CREATE TABLE Transports (
    transportid INTEGER PRIMARY KEY,
    pid INTEGER NOT NULL,
    did INTEGER NOT NULL,
    FOREIGN KEY (pid) REFERENCES Product (pid),
    FOREIGN KEY (did) REFERENCES Delivery (did)
);

CREATE TABLE Fulfills (
    fid INTEGER PRIMARY KEY,
    did INTEGER NOT NULL,
    od INTEGER NOT NULL,
    FOREIGN KEY (did) REFERENCES Delivery (did)
);

CREATE TABLE is_loaded (
    lid INTEGER PRIMARY KEY,
    did INTEGER NOT NULL,
    sid INTEGER,
    FOREIGN KEY (did) REFERENCES Delivery (did),
    FOREIGN KEY (sid) REFERENCES Shipment (sid)
);

CREATE TABLE contains_product (
    containsid INTEGER PRIMARY KEY,
    pid INTEGER,
    od INTEGER NOT NULL UNIQUE,
    FOREIGN KEY (pid) REFERENCES Product (pid),
    FOREIGN KEY (od) REFERENCES Fulfills (od)
);
CREATE TABLE belongs_to (
    belongsid INTEGER PRIMARY KEY,
    sid INTEGER UNIQUE,
    od INTEGER NOT NULL,
    FOREIGN KEY (sid) REFERENCES Shipment (sid),
    FOREIGN KEY (od) REFERENCES Fulfills (od)
);

CREATE TABLE Records(
    recordid INTEGER PRIMARY KEY,
    cid INTEGER NOT NULL,
    od INTEGER UNIQUE NOT NULL,
    FOREIGN KEY (cid) REFERENCES Customer (cid),
    FOREIGN KEY (od) REFERENCES Fulfills (od)
);



CREATE TABLE Buys (
    buyid INTEGER PRIMARY KEY,
    cid INTEGER,
    pid INTEGER NOT NULL,
    FOREIGN KEY (cid) REFERENCES Customer (cid),
    FOREIGN KEY (pid) REFERENCES Product (pid)
);




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



