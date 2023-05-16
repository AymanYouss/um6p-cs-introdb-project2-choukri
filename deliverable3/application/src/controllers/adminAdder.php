<?php
session_start();


try{
    $query = $this->$connection->prepare("INSERT INTO temporary_full_table(region, tdate, country, discharging_port, delivery_mode, customer_name, customer_group, category, pid, pallets, branding, total_volume, volume_per_container, incoterm, status1, Status2, payment_terms, payment_terms_days, price, estimated_freight, estimated_fob, sales_order, od, supplier, transporter, inspection, shipping_line, shipped_via, loading_date_at_plant, quantity_removed_from_the_site, stuffing_date, real_freight, real_fob, blno, sequence_date, transit_time, bldate, net_quantity, clearance_date, userComment, type_tc, port_loading, freight_invoice, freight_invoice2, freight_invoice3, days_of_storage, storage_cost, days_of_storage2, storage_cost2, days_of_storage3, storage_cost3, jours_half, jours_1, jours_2, jours_3, ac_status, contract_id, contract_status, invoice, Payment_status) 
    VALUES ('".$_POST["region"]."', '".$_POST["tdate"]."', '".$_POST["country"]."', '".$_POST["discharging_port"]."', '".$_POST["delivery_mode"]."', '".$_POST["customer_name"]."', '".$_POST["customer_group"]."', '".$_POST["category"]."', '".$_POST["pid"]."', '".$_POST["pallets"]."', '".$_POST["branding"]."', '".$_POST["total_volume"]."', '".$_POST["volume_per_container"]."', '".$_POST["incoterm"]."', '".$_POST["status1"]."', '".$_POST["Status2"]."', '".$_POST["payment_terms"]."', '".$_POST["payment_terms_days"]."', '".$_POST["price"]."', '".$_POST["estimated_freight"]."', '".$_POST["estimated_fob"]."', '".$_POST["sales_order"]."', '".$_POST["od"]."', '".$_POST["supplier"]."', '".$_POST["transporter"]."', '".$_POST["inspection"]."', '".$_POST["shipping_line"]."', '".$_POST["shipped_via"]."', '".$_POST["loading_date_at_plant"]."', '".$_POST["quantity_removed_from_the_site"]."', '".$_POST["stuffing_date"]."', '".$_POST["real_freight"]."', '".$_POST["real_fob"]."', '".$_POST["blno"]."', '".$_POST["sequence_date"]."', '".$_POST["transit_time"]."', '".$_POST["bldate"]."', '".$_POST["net_quantity"]."', '".$_POST["clearance_date"]."', '".$_POST["userComment"]."', '".$_POST["type_tc"]."', '".$_POST["port_loading"]."', '".$_POST["freight_invoice"]."', '".$_POST["freight_invoice2"]."', '".$_POST["freight_invoice3"]."', '".$_POST["days_of_storage"]."', '".$_POST["storage_cost"]."', '".$_POST["days_of_storage2"]."', '".$_POST["storage_cost2"]."', '".$_POST["days_of_storage3"]."', '".$_POST["storage_cost3"]."', '".$_POST["jours_half"]."', '".$_POST["jours_1"]."', '".$_POST["jours_2"]."', '".$_POST["jours_3"]."', '".$_POST["ac_status"]."', '".$_POST["contract_id"]."', '".$_POST["contract_status"]."', '".$_POST["invoice"]."', '".$_POST["Payment_status"]."')");
}
    





?>