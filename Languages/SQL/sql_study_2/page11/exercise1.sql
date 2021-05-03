/*
grup berdasarkan categori, setelah itu dapatkan total jumlah kolom price
dan kolom category untuk setiap grup
*/

SELECT SUM(price), category
FROM purchases
GROUP BY category
;

