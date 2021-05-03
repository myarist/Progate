/*
dapatkan total harga, lalu kelompokkan hasilnya berdasarkan tanggal,
hanya untuk grup yang memiliki total harga lebih dari 20
*/

SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at
HAVING SUM(price) > 20
;