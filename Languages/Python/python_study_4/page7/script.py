class MenuItem:
    def info(self):
        # Cetak dengan format '____: $____'
        print(self.name + ': $' + str(self.price))


menu_item1 = MenuItem()
menu_item1.name = 'Roti Lapis'
menu_item1.price = 5

menu_item1.info()

menu_item2 = MenuItem()
menu_item2.name = 'Kue Coklat'
menu_item2.price = 4

menu_item2.info()
