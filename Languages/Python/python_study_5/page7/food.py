from menu_item import MenuItem

class Food(MenuItem):
    # Definisikan method __init__ 
    def __init__(self, name, price, calorie_count):
        self.name = name
        self.price = price
        self.calorie_count = calorie_count
    
    def info(self):
        return self.name + ': $' + str(self.price) + ' (' + str(self.calorie_count) + 'kkal)'
    
    def calorie_info(self):
        print('kkal: ' + str(self.calorie_count))