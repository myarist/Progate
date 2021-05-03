-- dapatkan semua produk yang labanya lebih tinggi dari laba "hoodie abu-abu"
SELECT name, price - cost
FROM items
WHERE price <= 70 AND price - cost > (
  SELECT price - cost
  FROM items
  WHERE name = "hoodie abu-abu"
);