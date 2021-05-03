require "./food"
require "./drink"

puts "Semua item mendapatkan diskon setiap hari Minggu!"

food1 = Food.new(name: "Pizza", price: 8, calorie: 700)
food2 = Food.new(name: "Sushi", price: 10, calorie: 600)
drink1 = Drink.new(name: "Cola", price: 3, volume: 500)
drink2 = Drink.new(name: "Tea", price: 2, volume: 400)

menus = [food1, food2, drink1, drink2]

index = 0
menus.each do |menu|
  puts "#{index}. #{menu.info}"
  index += 1
end

puts "--------------"
puts "Pilih sebuah item dengan menuliskan angkanya:"
order = gets.chomp.to_i

selected_menu = menus[order]
puts "Anda telah memilih: #{selected_menu.name}"

puts "Berapa banyak?(Pembelian sebanyak 3 atau lebih akan mendapatkan diskon $1):"
count = gets.chomp.to_i

puts "Harga keseluruhan adalah $#{selected_menu.get_total_price(count)}"
