-- dapatkan nama dan jumlah penjualan unit untuk 5 barang dengan penjualan tertinggi
SELECT SUM(price) AS "total penjualan", SUM(price - cost) AS "total laba"
FROM items
JOIN sales_records  
ON items.id = sales_records.item_id;