from menu_item import MenuItem

class Food(MenuItem):
    # Definisikan method calorie_info 
    def calorie_info(self):
        print('kkal: ' + str(self.calorie_count))
