require "./menu"

menu1 = Menu.new(name: "Pizza", price: 8)
menu2 = Menu.new(name: "Sushi", price: 10)
menu3 = Menu.new(name: "Cola", price: 3)
menu4 = Menu.new(name: "Teh", price: 2)

# Tetapkan sebuah array berisikan menu-menu pada variable `menus`
menus = [menu1, menu2, menu3, menu4]

# Dapatkan masing-masing element dari `menus` menggunakan method `each`, lalu cetak info-nya
menus.each do |menu|
  puts menu.info
end
