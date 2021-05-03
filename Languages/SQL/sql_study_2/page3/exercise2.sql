/*
dapatkan jumlah total dari kolom price dimana
nilai character_name adalah "Ninja Ken"
*/

SELECT SUM(price)
FROM purchases
WHERE character_name = "Ninja Ken"
;