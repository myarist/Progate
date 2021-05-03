apple_price = 2
money = 10
input_count = input('Mau berapa apel?: ')
count = int(input_count)
total_price = apple_price * count

print('Anda akan membeli ' + str(count) + ' apel')
print('Harga total adalah ' + str(total_price) + ' dolar')

if money > total_price:
    print('Anda telah membeli ' + str(count) + ' apel')
    print('Uang Anda tinggal ' + str(money - total_price) + ' dolar')
elif money == total_price:
    print('Anda telah membeli ' + str(count) + ' apel')
    print('Dompet Anda sekarang kosong')
else:
    print('Uang Anda tidak mencukupi')
    print('Anda tidak dapat membeli apel sebanyak itu')