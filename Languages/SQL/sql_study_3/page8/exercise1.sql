SELECT *
FROM players
JOIN teams
ON players.previous_team_id = teams.id;