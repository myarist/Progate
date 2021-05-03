/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris dengan
nilai tanggal "2018-11-01" dan sebelumnya dari kolom "purchased_at"
*/

SELECT *
FROM purchases
WHERE purchased_at <= "2018-11-01";