/*
Tambahkan klausa WHERE untuk mendapatkan baris dengan category "makanan"
setelah itu, kelompokkan hasilnya berdasarkan kolom
purchased_at dan character_name 
*/

SELECT purchased_at, character_name, SUM(price)
FROM purchases
WHERE category = "makanan"
GROUP BY purchased_at, character_name
;




