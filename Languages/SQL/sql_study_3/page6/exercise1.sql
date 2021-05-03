SELECT *
FROM players
-- Tambahkan nama ke tabel gabungan
JOIN countries
-- Tambahkan kondisi join setelah ON
ON players.country_id = countries.id;