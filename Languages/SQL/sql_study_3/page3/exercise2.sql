-- Gunakan AS untuk menamai kolom "total skor tim"
SELECT SUM(goals) AS "total skor tim"
FROM players
;