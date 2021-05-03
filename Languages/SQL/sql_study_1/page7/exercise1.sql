/*
dibawah "FROM purchases" tambahkan code untuk mengambil
baris dimana nilai "name" mengandung kata "puding"
*/

SELECT *
FROM purchases
WHERE name LIKE "%puding%";