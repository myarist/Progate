puts "Silahkan tuliskan nama Anda"

# Menerima input, lalu tetapkan pada variable `name`
name = gets.chomp

# Cetak "Halo, ____"
puts "Halo, #{name}"

puts "Kue ini berharga $2"
puts "Berapa banyak yang Anda ingin beli?"

# Menerima input, lalu tetapkan pada variable `count` sebagai sebuah integer
count = gets.chomp.to_i

# Tetapkan `2 * count` pada variable `total_price`
total_price = 2 * count

# Cetak "Harga keseluruhan adalah $____"
puts "Harga keseluruhan adalah $#{total_price}"