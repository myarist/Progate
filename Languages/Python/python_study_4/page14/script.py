from menu_item import MenuItem

menu_item1 = MenuItem('Roti Lapis', 5)
menu_item2 = MenuItem('Kue Coklat', 4)
menu_item3 = MenuItem('Kopi', 3)
menu_item4 = MenuItem('Jus Jeruk', 2)

# Tetapkan variable menu_items ke list dari instance MenuItem 
menu_items = [menu_item1, menu_item2, menu_item3, menu_item4]

# Buat loop for
for menu_item in menu_items:
    print(menu_item.info())
