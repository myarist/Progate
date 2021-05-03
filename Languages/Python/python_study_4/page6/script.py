class MenuItem:
    # Definiskan method info 
    def info(self):
        print('Tampilkan nama dan harga dari menu item')


menu_item1 = MenuItem()
menu_item1.name = 'Roti Lapis'
menu_item1.price = 5

# Panggil method info dari menu_item1
menu_item1.info()

menu_item2 = MenuItem()
menu_item2.name = 'Kue Coklat'
menu_item2.price = 4

# Panggil method info dari menu_item2
menu_item2.info()
