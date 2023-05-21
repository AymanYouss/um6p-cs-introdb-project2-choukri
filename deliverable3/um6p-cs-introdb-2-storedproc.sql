USE phosphatefeeds;
DELIMITER //

-- this procedure returns the username of the user with the id passed as parameter

DROP PROCEDURE IF EXISTS WelcomeProcedure;
DROP PROCEDURE IF EXISTS ExportToCsv;
CREATE PROCEDURE WelcomeProcedure(IN userid INT)
BEGIN
    SELECT U.username
    FROM user_credentials U
    WHERE U.userid = userid;
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE ExportToCsv()
BEGIN
    (SELECT "region", "tdate", "country", "discharging_port", "delivery_mode", "customer_name", "customer_group", "category", "pid", "pallets", "branding", "total_volume", "volume_per_container", "incoterm", "status1", "Status2", "payment_terms", "payment_terms_days", "price", "estimated_freight", "estimated_fob", "sales_order", "od", "supplier", "transporter", "inspection", "shipping_line", "shipped_via", "loading_date_at_plant", "quantity_removed_from_the_site", "stuffing_date", "real_freight", "real_fob", "blno", "sequence_date", "transit_time", "bldate", "net_quantity", "clearance_date", "userComment", "type_tc", "port_loading", "freight_invoice", "freight_invoice2", "freight_invoice3", "days_of_storage", "storage_cost", "days_of_storage2", "storage_cost2", "days_of_storage3", "storage_cost3", "jours_half", "jours_1", "jours_2", "jours_3", "ac_status", "contract_id", "contract_status", "invoice", "Payment_status")
    UNION

	SELECT t.region, t.tdate, t.country, t.discharging_port, t.delivery_mode, t.customer_name, t.customer_group, t.category, t.pid, t.pallets, t.branding, t.total_volume, t.volume_per_container, t.incoterm, t.status1, t.Status2, t.payment_terms, t.payment_terms_days, t.price, t.estimated_freight, t.estimated_fob, t.sales_order, t.od, t.supplier, t.transporter, t.inspection, t.shipping_line, t.shipped_via, t.loading_date_at_plant, t.quantity_removed_from_the_site, t.stuffing_date, t.real_freight, t.real_fob, t.blno, t.sequence_date, t.transit_time, t.bldate, t.net_quantity, t.clearance_date, t.userComment, t.type_tc, t.port_loading, t.freight_invoice, t.freight_invoice2, t.freight_invoice3, t.days_of_storage, t.storage_cost, t.days_of_storage2, t.storage_cost2, t.days_of_storage3, t.storage_cost3, t.jours_half, t.jours_1, t.jours_2, t.jours_3, t.ac_status, t.contract_id, t.contract_status, t.invoice, t.Payment_status FROM temporary_full_table AS t INTO OUTFILE 'C:/wamp64/www/LBD4/db/um6p-cs-introdb-project2-choukri/deliverable3/tables-csv.csv' FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\r\n';
END //

DELIMITER ;    