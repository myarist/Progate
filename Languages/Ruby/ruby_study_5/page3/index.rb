# Lakukan `import` dari `food.rb` dan `drink.rb` menggunakan `require`
require "./food"
require "./drink"

# Tetapkan sebuah `instance` dari `Food` beserta argument-nya, pada variable `food1`
food1 = Food.new(name: "Pizza", price: 8)

# Cetak nilai `return` dari method `info` yang merupakan instance `food1`
puts food1.info

# Tetapkan sebuah instance dari `Drink` beserta argument-nya, pada variable `drink1`
drink1 = Drink.new(name: "Cola", price: 3)

# Cetak nilai `return` dari method `info` yang merupakan instance `drink1`
puts drink1.info
