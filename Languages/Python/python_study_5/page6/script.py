from food import Food
from drink import Drink

food1 = Food('Roti Lapis', 5)
food1.calorie_count = 330
print(food1.info())

# Buat instance class Drink dan tetapkan ke variable drink1
drink1 = Drink('Kopi', 3)

# Tetapkan volume variable drink1 ke 180
drink1.volume = 180

# Panggil method info dari drink1 dan cetak nilai return
print(drink1.info())
