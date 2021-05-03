/*
dibawah "FROM purchases" tambahkan code untuk mendapatkan semua baris dimana
kolom "name" tidak mengandung kata "puding"
*/

SELECT *
FROM purchases
WHERE NOT name LIKE "%puding%";