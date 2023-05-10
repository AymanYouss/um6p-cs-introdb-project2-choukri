SYSTEM mysql -u logistics;
USE phosphatefeeds;
SELECT S.sid FROM Shipment S WHERE S.stuffing_date='2022-08-29' LIMIT 7;