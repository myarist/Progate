class MenuItem:
    def info(self):
        # Return kontent dari print() sebagai nilai return
        return self.name + ': $' + str(self.price)


menu_item1 = MenuItem()
menu_item1.name = 'Roti Lapis'
menu_item1.price = 5

# Cetak nilai dari menu_item1.info()
print(menu_item1.info())

menu_item2 = MenuItem()
menu_item2.name = 'Kue Coklat'
menu_item2.price = 4

# Cetak nilai dari menu_item2.info()
print(menu_item2.info())

