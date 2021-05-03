/*
tambahkan aturan di klausa WHERE untuk mengelompokkan
baris, dimana character_name adalah "Ninja Ken"
*/

SELECT SUM(price), purchased_at
FROM purchases
WHERE character_name = "Ninja Ken"
GROUP BY purchased_at
;




