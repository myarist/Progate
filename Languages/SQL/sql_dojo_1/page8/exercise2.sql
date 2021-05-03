-- dapatkan total harga penjualan dan kelompokan berdasarkan tanggal pembelianya
SELECT purchased_at, SUM(price) AS "total penjualan"
FROM sales_records
JOIN items
ON sales_records.item_id = items.id
GROUP BY purchased_at;
