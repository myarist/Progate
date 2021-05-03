/*
dibawah "FROM purchases" tambahkan code untuk
menambahkan baris dimana kolom "price" adalah NULL
*/

SELECT *
FROM purchases
WHERE price IS NULL;