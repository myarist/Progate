/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris
dimana nilai kolom "category" adalah "makanan"
dan nilai kolom "character_name" adalah "Guru Domba"
*/

SELECT *
FROM purchases
WHERE category = "makanan" AND character_name = "Guru Domba";