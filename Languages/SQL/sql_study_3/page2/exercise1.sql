SELECT name
FROM players
WHERE goals > (
  -- Ketik statement SQL untuk mendapatkan skor milik Will dibaris bawah
  SELECT goals
  FROM players
  WHERE name = 'Will'
)
;