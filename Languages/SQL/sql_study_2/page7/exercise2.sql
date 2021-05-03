-- dapatkan jumlah baris untuk setiap grup purchased_at 
SELECT purchased_at, COUNT(*)
FROM purchases
GROUP BY purchased_at;