# Tulis ulang untuk `import` `food.rb` dan `drink.rb`
require "./food"
require "./drink"

# Ubah `food1` dan `food2` menjadi instance-instance dari class `Food`
food1 = Food.new(name: "Pizza", price: 8)
food2 = Food.new(name: "Sushi", price: 10)
# Ubah `drink1` dan `drink2` menjadi instance-instance dari class `Drink`
drink1 = Drink.new(name: "Cola", price: 3)
drink2 = Drink.new(name: "Teh", price: 2)

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
