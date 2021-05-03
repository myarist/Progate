# Definisikan method `shipping_free?`
def shipping_free?(price)
  return price >= 50
end

# Tambahkan alur kontrol berdasarkan nilai return dari method `shipping_free?`
if shipping_free?(30)
	puts "Gratis ongkos kirim untuk pembelian diatas $50"
else
  puts "Ongkos kirim adalah $5"
end