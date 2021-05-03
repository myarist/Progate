-- dapatkan total harga purchases berdasarkan purchased_at dan character_name
SELECT purchased_at, character_name, SUM(price))
FROM purchases
GROUP BY purchased_at, character_name
;
