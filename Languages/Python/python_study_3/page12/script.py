# Pindahkan ke 3 function dibawah ke utils.py

# import module utils
import utils

print('Memulai permainan Batu Kertas Gunting!')
player_name = input('Masukkan nama Anda: ')

print('Pilih tangan: (0: Batu, 1: Kertas, 2: Gunting)')
player_hand = int(input('Masukkan nomor (0-2): '))

# Panggil function validate milik module utils
if utils.validate(player_hand):
    computer_hand = 1
    
    # Panggil function print_hand milik module utils 
    utils.print_hand(player_hand, player_name)
    utils.print_hand(computer_hand, 'Komputer')
    
    # Panggil function judge milik module utils 
    result = utils.judge(player_hand, computer_hand)
    print('Hasil: ' + result)
else:
    print('Mohon masukkan nomor yang benar')
