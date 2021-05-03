from food import Food
from drink import Drink

food1 = Food('Roti Lapis', 5, 330)
print(food1.info())

drink1 = Drink('Kopi', 3)
drink1.volume = 180
print(drink1.info())
