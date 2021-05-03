def print_hand(hand, name='Tamu'):
    # Tetapkan list hands ke variable hands 
    hands = ['Batu', 'Kertas', 'Gunting']
    
    # Memperbarui dengan menggunakan element dari variable hands 
    print(name + ' memilih: ' + hands[hand])

print('Memulai Permainan Batu Kertas Gunting!')
player_name = input('Masukkan nama Anda: ')
# Cetak 'Pilih tangan: (0: Batu, 1: Kertas, 2: Gunting)'
print('Pilih tangan: (0: Batu, 1: Kertas, 2: Gunting)')

# Dapatkan input, ubah, dan tetapkan ke variable player_hand 
player_hand = int(input('Masukkan nomor (0-2): '))

# Ubah argument pertama ke player_hand
print_hand(player_hand, player_name)