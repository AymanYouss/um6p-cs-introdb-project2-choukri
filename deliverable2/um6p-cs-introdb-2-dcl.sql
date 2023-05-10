USE phosphatefeeds;

DROP USER IF EXISTS 'sales'@'localhost';
DROP ROLE IF EXISTS 'sales';
DROP USER IF EXISTS 'logistics'@'localhost';
DROP ROLE IF EXISTS 'logistics';

CREATE USER 'sales'@'localhost';
CREATE USER 'logistics'@'localhost';

CREATE ROLE 'sales';
GRANT 'sales' TO 'sales'@'localhost';
SET DEFAULT ROLE 'sales' TO 'sales'@'localhost';

CREATE ROLE 'logistics';
GRANT 'logistics' TO 'logistics'@'localhost';
SET DEFAULT ROLE 'logistics' TO 'logistics'@'localhost';

/*
SYSTEM mysql -u sales;
SELECT CURRENT_ROLE();
SHOW databases;

SYSTEM mysql -u logistics;
SELECT CURRENT_ROLE();
SHOW databases;

SYSTEM mysql -u root;
USE phosphatefeeds;

*/
/*The command below allows for both roles to be able to select from every table in the database*/
GRANT SELECT ON * TO sales, logistics;

/* The command below grants the logistics role permission to perform SELECT, INSERT, UPDATE, DELETE and INDEX operations on the Shipment table since only the logistics role is concerned with this table. */
GRANT SELECT, INSERT, UPDATE, DELETE, INDEX ON Shipment TO logistics;

/* The command below grants the sales role permission to perform SELECT, INSERT, UPDATE, DELETE and INDEX operations on the sales transaction table since only the sales role is concerned with this table. */
GRANT SELECT, INSERT, UPDATE, DELETE, INDEX ON sales_transaction TO sales;

/* The following two commands give permission for sales role to access and edit some columns of the customers table and gives logistics some other columns of the same table as precised by the business requirements*/

GRANT SELECT (customer_name, customer_group), INSERT (customer_name, customer_group), UPDATE (customer_name, customer_group) ON customer TO sales;

GRANT SELECT (contract_id, contract_status), INSERT (contract_id, contract_status), UPDATE (contract_id, contract_status) ON customer TO logistics;

/*The following command allows us to demonstrate the privileges that the logistics role has*/

/*
SYSTEM mysql -u logistics;
USE phosphatefeeds;
SELECT S.sid FROM Shipment S WHERE S.stuffing_date='2022-08-29' LIMIT 7;

-- The following command allows us to demonstrate the privileges that the sales role has
SYSTEM mysql -u sales;
USE phosphatefeeds;
SELECT ST.od FROM Sales_Transaction ST WHERE ST.payment_terms = 'CAD' LIMIT 7;

SYSTEM mysql -u root;
*/
