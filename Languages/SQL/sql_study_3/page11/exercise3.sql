SELECT countries.name AS "nama negara", AVG(goals) AS "skor rata-rata"
FROM players
JOIN countries
ON players.country_id = countries.id
GROUP BY countries.name;