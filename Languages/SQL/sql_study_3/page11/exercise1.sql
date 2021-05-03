SELECT name AS "nama pemain", height AS "tinggi pemain"
FROM players
WHERE height > (
  SELECT AVG(height)
  FROM players
);