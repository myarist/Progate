-- dapatkan jumlah berapa kali setiap jenis item terjual berdasarkan id item
SELECT item_id, COUNT(*)
FROM sales_records
GROUP BY item_id;