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
    userComment TEXT,
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
    transporter VARCHAR(255),
    jours_half REAL,
    jours_1 REAL,
    jours_2 REAL,
    jours_3 REAL
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


CREATE INDEX shipment_qty ON shipment(quantity_removed_from_the_site, net_quantity);
CREATE INDEX sales_no ON sales_transaction(sales_order);
CREATE INDEX product_name ON product(category(4),bag_size(2),percentage);
CREATE INDEX delivery_ports ON delivery(port_loading(10),discharging_port(10));







