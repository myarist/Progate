/*
dapatkan nama dan jumlah barang untuk pengguna
yang sudah membeli lebih dari 10 barang
*/
SELECT users.id, name, COUNT(*) AS "jumlah"
FROM sales_records
JOIN users
ON sales_records.user_id = users.id
GROUP BY users.id
HAVING COUNT(*) >= 10;