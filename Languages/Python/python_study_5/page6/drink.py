from menu_item import MenuItem

class Drink(MenuItem):
    # Definisikan method info
    def info(self):
        return self.name + ': $' + str(self.price) + ' (' + str(self.volume) + 'mL)'
