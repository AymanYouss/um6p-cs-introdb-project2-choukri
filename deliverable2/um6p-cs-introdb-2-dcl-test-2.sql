SYSTEM mysql -u sales;
USE phosphatefeeds;
SELECT ST.od FROM Sales_Transaction ST WHERE ST.payment_terms = 'CAD' LIMIT 7;
