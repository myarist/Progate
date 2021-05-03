/*
dapatkan total berapa kali purchases terjadi berdasarkan
purchased_at and character_name
*/

SELECT purchased_at, character_name, COUNT(*)
FROM purchases
GROUP BY purchased_at, character_name
;
