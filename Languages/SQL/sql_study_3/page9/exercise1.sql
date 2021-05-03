SELECT *
FROM players
LEFT JOIN teams
ON players.previous_team_id = teams.id;