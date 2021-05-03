/*
dapatkan nilai rata-rata dari kolom price dimana
nilai character_name adalah "Ninja Ken" 
*/

SELECT AVG(price)
FROM purchases
WHERE character_name = "Ninja Ken"
;