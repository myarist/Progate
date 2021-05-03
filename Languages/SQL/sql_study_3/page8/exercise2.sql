SELECT players.name AS "nama pemain", teams.name AS "tim (tahun lalu)"
FROM players
JOIN teams
ON players.previous_team_id = teams.id;