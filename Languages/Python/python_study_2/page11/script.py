# Buat dictionary dengan kunci dan nilai, dan tetapkan ke variable items 
items = {'apel': 2, 'pisang': 4, 'jeruk': 6}
# Buat loop for yang mengambil kunci dari items
for item_name in items:
    # Cetak '--------------------------------------------------'
    print('--------------------------------------------------')
    # Cetak 'Harga setiap ___ ___ dolar'
    print('Harga setiap ' + item_name + ' ' + str(items[item_name]) + ' dolar')