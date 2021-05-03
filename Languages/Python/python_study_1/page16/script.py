apple_price = 2

# Terima jumlah apel dengan menggunakan input(), dan berikan hasilnya ke variable input_count 
input_count = input("Mau berapa apel?: ")

# Ubah variable input_count ke integer, dan berikan hasilnya ke variable count 
count = int(input_count)
total_price = apple_price * count

print('Anda akan membeli ' + str(count) + ' apel')
print('Harga total adalah ' + str(total_price) + ' dolar')