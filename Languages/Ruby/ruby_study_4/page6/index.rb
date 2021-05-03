class Menu
  attr_accessor :name
  attr_accessor :price
end

menu1 = Menu.new

menu1.name = "Pizza"
puts menu1.name

menu1.price = 8
puts menu1.price

# Tetapkan sebuah instance dari Menu pada variable `menu2`
menu2 = Menu.new

# Tetapkan "Sushi" pada `name` dari instance `menu2`
menu2.name = "Sushi"

# Cetak `name` dari instance `menu2`
puts menu2.name

# Tetapkan 10 pada `price` dari instance `menu2`
menu2.price = 10

# Cetak `price` dari instance `menu2`
puts menu2.price













