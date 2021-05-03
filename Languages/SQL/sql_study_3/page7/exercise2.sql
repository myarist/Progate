SELECT countries.name, SUM(goals)
FROM players
JOIN countries
ON players.country_id = countries.id
GROUP BY countries.name;