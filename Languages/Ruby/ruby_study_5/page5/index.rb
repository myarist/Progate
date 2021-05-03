require "./food"
require "./drink"

food1 = Food.new(name: "Pizza", price: 8)
food1.calorie = 700

# Cetak nilai `return` dari method instance `calorie_info` milik instance `food1`
puts food1.calorie_info
