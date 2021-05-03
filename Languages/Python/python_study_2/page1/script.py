money = 20
items = {'apel': 2, 'pisang': 4, 'jeruk': 6}
for item_name in items:
    print('--------------------------------------------------')
    print('Anda memiliki ' + str(money) + ' dolar di dompet Anda')
    print('Harga setiap ' + item_name + ' ' + str(items[item_name]) + ' dolar')
    
    input_count = input('Mau berapa ' + item_name + '?:')
    print('Anda akan membeli ' + input_count + ' ' + item_name)
    
    count = int(input_count)
    total_price = items[item_name] * count
    print('Harga total adalah ' + str(total_price) + ' dolar')
    
    if money >= total_price:
        print('Anda telah membeli ' + input_count + ' ' + item_name)
        money -= total_price
        
        if money == 0:
            print('Dompet Anda kosong')
            break
    else:
        print('Uang Anda tidak mencukupi')
        print('Anda tidak dapat membeli ' + item_name + ' sebanyak itu')
print('Uang Anda tinggal ' + str(money) + ' dolar')
