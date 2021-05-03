from menu_item import MenuItem

menu_item1 = MenuItem('Roti Lapis', 5)
menu_item2 = MenuItem('Kue Coklat', 4)
menu_item3 = MenuItem('Kopi', 3)
menu_item4 = MenuItem('Jus Jeruk', 2)

menu_items = [menu_item1, menu_item2, menu_item3, menu_item4]

index = 0

for menu_item in menu_items:
    print(str(index) + '. ' + menu_item.info())
    index += 1

print('--------------------')

# Dapatkan input dari console dan tetapkan hasilnya ke variable order
order = int(input('Masukkan nomor menu: '))

# Tetapkan variable selected_menu ke item menu yang dipilih
selected_menu = menu_items[order]

# Cetak 'Item yang dipilih: ____'
print('Item yang dipilih: ' + selected_menu.name)
