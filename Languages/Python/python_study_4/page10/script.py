class MenuItem:
    # Definisikan method __init__
    def __init__(self):
        print('Instance dari class MenuItem telah di ciptakan!')

    def info(self):
        return self.name + ': $' + str(self.price)

    def get_total_price(self, count):
        total_price = self.price * count
        return total_price


menu_item1 = MenuItem()
menu_item1.name = 'Roti Lapis'
menu_item1.price = 5

print(menu_item1.info())

result = menu_item1.get_total_price(4)
print('Total harga adalah $' + str(result))
