def print_hand(hand, name='Tamu'):
    print(name + ' memilih: ' + hand)

print('Memulai Permainan Batu Kertas Gunting!')

# Dapatkan input, dan tetapkan ke variable player_name
player_name = input('Masukkan nama Anda: ')

# Tambahkan argument ke dua ke print_hand
print_hand('Batu', player_name)