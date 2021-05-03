def discount(price)
	# Hasilkan nilai pembagian `price / 2`
	return price / 2
end

puts "Headphone sedang diskon hari ini!"

# Panggil method `discount`, lalu tetapkan pada variable `half_price`
half_price = discount(150)

# Cetak "Harga diskon adalah $____" menggunakan variable `half_price`
puts "Harga diskon adalah $#{half_price}"