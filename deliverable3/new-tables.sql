USE phosphateFeeds;
DROP TABLE IF EXISTS temporary_full_table;


CREATE TABLE temporary_full_table (
	region VARCHAR(255),
    tdate DATE,
    -- Quarter
    -- Year
    country VARCHAR(255),
    discharging_port VARCHAR(255),
    delivery_mode VARCHAR(255),
    customer_name VARCHAR(255),
    customer_group VARCHAR(255),
    category VARCHAR(255),
    pid INTEGER,
    pallets VARCHAR(255),
	branding VARCHAR(255),
    total_volume INTEGER,
    volume_per_container INTEGER,
    -- number_of_tc
    incoterm VARCHAR(255),
    status1 VARCHAR(255),
    status2 VARCHAR(255),
    payment_terms VARCHAR(255),
	payment_terms_days INTEGER,
    price REAL,
    estimated_freight REAL,
    estimated_fob REAL,
    -- Estimated insurance
    -- price exw
    -- eq acide
    -- price fob
    -- ca exw
    -- ca fob
    -- ca cfr
    sales_order INTEGER,
    od INTEGER PRIMARY KEY,
    supplier VARCHAR(255),
    transporter VARCHAR(255),
    inspection VARCHAR(255),
    shipping_line VARCHAR(255),
    shipped_via VARCHAR(255),
    loading_date_at_plant DATE,
    quantity_removed_from_the_site INTEGER,
    stuffing_date DATE,
    real_freight REAL,
    real_fob REAL,
    blno INTEGER,
    sequence_date DATE,
    transit_time INTEGER,
    -- eta
	bldate DATE,
    -- bldate sob date,
    -- blmonth
    -- blquarter
    -- blyear
    net_quantity INTEGER,
    clearance_date DATE,
	userComment TEXT,
    type_tc VARCHAR(255),
    port_loading VARCHAR(255),
    freight_invoice REAL,
    freight_invoice2 REAL,
    freight_invoice3 REAL,
    days_of_storage INTEGER,
    storage_cost REAL,
    days_of_storage2 INTEGER,
    storage_cost2 REAL,
    days_of_storage3 INTEGER,
    storage_cost3 REAL,
	jours_half REAL,
    jours_1 REAL,
    jours_2 REAL,
    jours_3 REAL,
    -- majoration en nombre
    -- au dela de 21h
    -- total ht
    -- mois facturation
    ac_status VARCHAR(255),
    contract_id INTEGER,
    contract_status VARCHAR(255),
    invoice REAL,
    -- invoiced amount
    -- payment_deadline
    Payment_status VARCHAR(255)
    
);


DROP TABLE IF EXISTS user_credentials;

CREATE TABLE user_credentials (
    userid INTEGER AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    upassword VARCHAR(255),
    email VARCHAR(255),
    urole VARCHAR(255)
);


LOAD DATA INFILE 'C:/wamp64/www/DBMS/um6p-cs-introdb-project2-choukri/deliverable3/data.csv' 
INTO TABLE temporary_full_table 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
