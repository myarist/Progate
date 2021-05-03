# Import class MenuItem dari menu_item.py
from menu_item import MenuItem

menu_item1 = MenuItem('Roti Lapis', 5)

print(menu_item1.info())

result = menu_item1.get_total_price(4)
print('Total harga adalah $' + str(result))
