# Tambahkan price sebagai parameter kedua
def print_info(item, price)
  puts "Selamat datang di Toko Elektronik Ninja!"
  puts "Ada banyak #{item} yang sedang diskon hari ini! Masing-masing hanya $#{price}!"
end

# Panggil method `print_info`
print_info("USB Flash Disk", 12)