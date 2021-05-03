SELECT players.name, countries.name
FROM players
JOIN countries
ON players.country_id = countries.id;