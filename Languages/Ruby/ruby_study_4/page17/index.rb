require "./menu"

menu1 = Menu.new(name: "Pizza", price: 8)
menu2 = Menu.new(name: "Sushi", price: 10)
menu3 = Menu.new(name: "Cola", price: 3)
menu4 = Menu.new(name: "Teh", price: 2)

menus = [menu1, menu2, menu3, menu4]

index = 0
menus.each do |menu|
  puts "#{index}. #{menu.info}"
  index += 1
end

puts "--------------"
puts "Pilihlah sebuah item dengan menuliskan angkanya:"

# Terima input, lalu tetapkan pada variable `order` sebagai sebuah integer
order = gets.chomp.to_i

# Tetapkan menu yang terpilih pada variable `selected_menu`
selected_menu = menus[order]

# Cetak "Anda telah memilih: ____"
puts "Anda telah memilih: #{selected_menu.name}"

puts "Berapa banyak?(Pembelian 3 atau lebih akan mendapatkan diskon $1):"

# Terima input, lalu tetapkan pada variable `count` sebagai sebuah integer
count = gets.chomp.to_i

# Cetak "Harga keseluruhan adalah $____"
puts "Harga keseluruhan adalah $#{selected_menu.get_total_price(count)}"