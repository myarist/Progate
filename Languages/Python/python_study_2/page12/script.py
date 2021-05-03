items = {'apel': 2, 'pisang': 4, 'jeruk': 6}
for item_name in items:
    print('--------------------------------------------------')
    print('Harga setiap ' + item_name + ' ' + str(items[item_name]) + ' dolar')
    
    # Dapatkan nilai menggunakan input(), dan berikan ke variable input_count 
    input_count = input('Mau berapa ' + item_name + '?: ')
    
    # Cetak 'Anda akan membeli ___ ___' menggunakan input_count dan item_name
    print('Anda akan membeli ' + input_count + ' ' + item_name)
    
    # Ubah input_count ke integer dan berikan ke variable count 
    count = int(input_count)
    
    # Kalikan harga setiap item dan variable count, dan berikan ke variable total_price 
    total_price = items[item_name] * count
    
    # Dengan menggunakan total_price dan type conversion, cetak 'Harga total adalah ___ dolar'
    print('Harga total adalah ' + str(total_price) + ' dolar')
