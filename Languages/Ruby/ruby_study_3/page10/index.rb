# Tulis ulang parameter-parameter untuk menerima argument kata kunci
def buy(item:, price:, count:)
	puts "Anda telah membeli #{item} sebanyak #{count} buah"
	puts "Total harga adalah $#{price * count}"
end

# Tulis ulang argument-argument dengan argument kata kunci
buy(item: "headphone", price: 150, count: 2)