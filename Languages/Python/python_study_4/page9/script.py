class MenuItem:
    def info(self):
        return self.name + ': $' + str(self.price)

    # Definiskan method get_total_price
    def get_total_price(self, count):
        total_price = self.price * count
        return total_price


menu_item1 = MenuItem()
menu_item1.name = 'Roti Lapis'
menu_item1.price = 5

print(menu_item1.info())

# Panggil method get_total_price 
result = menu_item1.get_total_price(4)

# Cetak 'Total harga adalah $____'
print('Total harga adalah $' + str(result))
