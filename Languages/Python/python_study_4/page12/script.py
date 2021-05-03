class MenuItem:
    # Tambahkan parameter name dan price
    def __init__(self, name, price):
        # Gantikan 'Roti Lapis' ke parameter name
        self.name = name
        
        # Gantikan 5 ke parameter price
        self.price = price

    def info(self):
        return self.name + ': $' + str(self.price)

    def get_total_price(self, count):
        total_price = self.price * count
        return total_price


# Tambahkan 'Roti Lapis' dan 5 sebagai argument
menu_item1 = MenuItem('Roti Lapis', 5)

print(menu_item1.info())

result = menu_item1.get_total_price(4)
print('Total harga adalah $' + str(result))
