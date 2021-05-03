def validate(hand):
    if hand < 0 or hand > 2:
        return False
    # Hapus else dan perbaiki indentasi
    return True

def print_hand(hand, name='Tamu'):
    hands = ['Batu', 'Kertas', 'Gunting']
    print(name + ' memilih: ' + hands[hand])

print('Memulai permainan Batu Kertas Gunting!')
player_name = input('Masukkan nama Anda: ')

print('Pilih tangan: (0: Batu, 1: Kertas, 2: Gunting)')
player_hand = int(input('Masukkan nomor (0-2): '))

if validate(player_hand):
    print_hand(player_hand, player_name)
else:
    print('Mohon masukkan nomor yang benar')
