
SELECT D.did FROM Delivery D WHERE D.region = 'Africa';

SELECT P.pid FROM Product P WHERE P.price >= 710;

SELECT C.cid FROM Customer C WHERE C.contract_status = 'Signed OCP';

SELECT P.pid FROM Product P WHERE P.branding = ‘Phosfeed’ AND P.bag_size ='B';

SELECT S.sid FROM Shipment S WHERE  S.stuffing_date='2022-08-29';

SELECT ST.od FROM Sales_Transaction ST WHERE ST.payment_terms = 'CAD';

SELECT B.sid FROM Bill_of_Loading B WHERE  B.bldate='2022-6-23';

SELECT ST.od FROM Sales_Transaction ST WHERE ST.freight_invoice = 116 AND ST.total_volume >= 500;

SELECT D.region FROM Delivery D WHERE D.supplier ='SVN' AND D.port_loading='Tanger';

SELECT D.contract_status FROM  Delivery D WHERE D.customer_group  LIKE 'GREEFOS%';

-- --------------------------------------------------------------------------
#transport id where the weight of product was higher than 80 tons and percentage of ? is equal to 18
SELECT T.transportid
FROM Transports T
JOIN Product P ON T.pid = P.pid
WHERE P.weight > 80 AND P.percentage = 18;
 
# contract id of all commands that happened in year 2022 after April where the net quantity was higher than 440
SELECT C.contract_id
FROM Bill_of_loading  BL
JOIN Customer C  ON C.cid = BL.cid
JOIN Shipment S  ON BL.sid = S.sid
WHERE  YEAR (S.stuffing_date) = 2022 AND MONTH(S.stuffing_date) > 4 AND S.net_quantity > 440;
 
 
#Union ?


#all customers  that ordered  in year 2020 
SELECT BL.cid
From Bill_of_Loading BL
INNER JOIN Shipment S
WHERE S.stuffing_date >= '2020-01-01' AND S.stuffing_date <= '2020-12-31'
ORDER BY stuffing_date;
 
 
#number of orders per customer
SELECT DISTINCT BL.cid , COUNT(DISTINCT BL.sid) as order_count
FROM customers C
INNER JOIN Bill_of_Loading BL
ON C.cid = BL.cid
GROUP BY BL.cid
ORDER BY order_count DESC; 

#product (and its payment terms and status) with the highest invoiced amount 
SELECT P.pid, P.branding, P.bag_size, ST.payment_terms,ST.payment_status
FROM Product P
JOIN Contains_product CP on CP.pid = P.pid 
JOIN Sales_Transaction ST  on ST.od = CP.od
WHERE ST.invoice = (	SELECT MAX( ST1.invoice)
					FROM Sales_Transaction ST1
				);

#At least six SQL data modification (two update, two deletion, two insertion) commands.

#updates
UPDATE Delivery 
JOIN Fulfills on Fulfills.did = Delivery.did
SET Delivery.delivery_mode = 'Truck',Delivery.discharging_port= 'Lagos'
WHERE Fulfills.od= 1;

UPDATE Customer 
JOIN Records on Records.cid = Customer.cid
JOIN Fulfills on Fulfills.od = Records.od
JOIN Delivery on Delivery.did = Fulfills.did
SET Delivery.real_freight = 20000 , Customer.contract_status= 'Draft'
WHERE Fulfills.od= 100 AND Customer.customer_group='CP Group' ;
-- -------------------------------------------------------
#insertion

INSERT INTO Shipment (sid, net_quantity, days_of_storage, days_of_storage2,days_of_storage3, pallets, inspection, loading_date_at_plant, quantity_removed_from_the_site, stuffing_date, sequence_date, storage_cost, storage_cost2, storage_cost3)
VALUES (1004,1200, 2, 0, 0,'1 pallet per BB', 'Inspectorate','5-9-2023',110,'5-20-2023','5-11-2023',84.91, 66,100);

INSERT INTO Sales_transaction (od,freight_invoice, freight_invoice2, freight_invoice3,sales_order, payment_terms, clearance_date,payment_terms_days,incoterm,total_volume,invoice,comment,estimated_fob,payment_status)
VALUES (105,120, 20.7, 78.4, 1772,'Cable bank transfer', '12-25-2022',15,'CIF',4400,9000,37, 66,'Not paid');
-- ------------------------------------------------------

#Deletion

DELETE FROM Delivery WHERE status = 'Finalized';
DELETE FROM Sales_Transaction WHERE YEAR(tdate) <= 2015;
