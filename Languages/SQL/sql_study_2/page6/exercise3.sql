/*
untuk baris dimana nilai character_name adalah "Ninja Ken"
dapatkan harga tertinggi dari semua nilai dikolom price
*/

SELECT MAX(price)
FROM purchases
WHERE character_name = "Ninja Ken"
;