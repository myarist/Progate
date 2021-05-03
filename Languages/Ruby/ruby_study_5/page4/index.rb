require "./food"
require "./drink"

food1 = Food.new(name: "Pizza", price: 8)
drink1 = Drink.new(name: "Cola", price: 3)

# Tetapkan 700 pada variable instance `calorie` dari `food1`
food1.calorie = 700

# Cetak variable instance `calorie` dari `food1`
puts food1.calorie

# Tetapkan 500 pada variable instance `volume` dari `drink1`
drink1.volume = 500

# Cetak variable instance `volume` dari `drink1`
puts drink1.volume






