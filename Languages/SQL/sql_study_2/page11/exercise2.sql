/*
buatlah sebuah grup untuk setiap karakter,
dan dapatkan total jumlah dari kolom price dan character_name 
tetapi, aggregatkan hasil hanya untuk kolom category dengan nilai "lainnya"
*/

SELECT SUM(price), character_name
FROM purchases
WHERE category = "lainnya"
GROUP BY character_name
;

