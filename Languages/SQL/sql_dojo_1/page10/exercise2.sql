-- dapatkan data untuk 5 produk dengan penjualan tertinggi 
SELECT items.id, items.name, SUM(price) AS "total penjualan"
FROM items
JOIN sales_records
ON items.id = sales_records.item_id
GROUP BY items.id
ORDER BY SUM(price) DESC
LIMIT 5;