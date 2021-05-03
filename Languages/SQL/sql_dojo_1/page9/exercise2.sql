-- dapatkan id dan nama pengguna yang membeli "sandal"
SELECT users.id, users.name
FROM sales_records
JOIN users
ON sales_records.user_id = users.id
WHERE sales_records.item_id = (
  SELECT id
  FROM items
  WHERE name = "sandal"
)
GROUP BY users.id;