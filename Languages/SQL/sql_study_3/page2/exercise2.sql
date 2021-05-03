SELECT name,goals
FROM players
WHERE goals > (            
  SELECT AVG(goals)            
  FROM players            
);