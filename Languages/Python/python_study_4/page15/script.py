from menu_item import MenuItem

menu_item1 = MenuItem('Roti Lapis', 5)
menu_item2 = MenuItem('Kue Coklat', 4)
menu_item3 = MenuItem('Kopi', 3)
menu_item4 = MenuItem('Jus Jeruk', 2)

menu_items = [menu_item1, menu_item2, menu_item3, menu_item4]

# Definisikan variable index dan tetapkan 0 kepadanya
index = 0

for menu_item in menu_items:
    # Cetak dengan format '0. Roti Lapis: $5' untuk setiap index
    print(str(index) + '. ' + menu_item.info())
    
    # Tambahkan 1 ke variable index
    index += 1
