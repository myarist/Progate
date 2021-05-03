# Import class Food dan class Drink 
from food import Food
from drink import Drink

# Buat instance class Food dan berikan ke variable food1 
food1 = Food('Roti Lapis', 5)

# Panggil method info dari food1 dan cetak nilai return
print(food1.info())

# Buat instance class Drink dan berikan ke variable drink1 
drink1 = Drink('Kopi', 3)

# Panggil method info dari drink1 dan cetak nilai return
print(drink1.info())
