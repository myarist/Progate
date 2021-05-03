-- dapatkan jumlah total uang yang dikeluarkan untuk setiap grup purchased_at 
SELECT purchased_at, SUM(price)
FROM purchases
GROUP BY purchased_at;
