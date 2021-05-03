-- dapatkan semua pengguna pria yang berumur dibawah 20 tahun
SELECT *
FROM users
WHERE gender = 0
AND age < 20;