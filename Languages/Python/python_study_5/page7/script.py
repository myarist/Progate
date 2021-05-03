from food import Food
from drink import Drink

# Tambahkan argument ke Food()
food1 = Food('Roti Lapis', 5, 330)

# Hapus satu baris di bawah
# food1.calorie_count = 330

print(food1.info())

drink1 = Drink('Kopi', 3)
drink1.volume = 180
print(drink1.info())
