-- Gunakan AS untuk menamai kolom "180 cm atau lebih"
SELECT name AS "180 cm atau lebih"
FROM players
WHERE height >= 180;