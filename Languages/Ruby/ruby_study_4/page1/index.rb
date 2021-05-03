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
puts "Pilih sebuah item dengan angkanya:"
order = gets.chomp.to_i

selected_menu = menus[order]
puts "Anda telah memilih: #{selected_menu.name}"

puts "Berapa banyak?(Pembelian 3 atau lebih akan mendapat diskon $1):"
count = gets.chomp.to_i

puts "Harga keseluruhan adalah $#{selected_menu.get_total_price(count)}"
