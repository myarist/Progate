def validate(hand):
    if hand < 0 or hand > 2:
        return False
    return True

def print_hand(hand, name='Tamu'):
    hands = ['Batu', 'Kertas', 'Gunting']
    print(name + ' memilih: ' + hands[hand])

# Definisikan function judge 
def judge(player, computer):
    # Tambahkan control flow berdasarkan perbandingan antara player dan computer
    if player == computer:
        return 'Seri'
    elif player == 0 and computer == 1:
        return 'Kalah'
    elif player == 1 and computer == 2:
        return 'Kalah'
    elif player == 2 and computer == 0:
        return 'Kalah'
    else:
        return 'Menang'

print('Memulai permainan Batu Kertas Gunting!')
player_name = input('Masukkan nama Anda: ')

print('Pilih tangan: (0: Batu, 1: Kertas, 2: Gunting)')
player_hand = int(input('Masukkan nomor (0-2): '))

if validate(player_hand):
    computer_hand = 1
    
    print_hand(player_hand, player_name)
    print_hand(computer_hand, 'Komputer')
    
    # Tetapkan nilai return dari judge ke variable result 
    result = judge(player_hand, computer_hand)
    # Cetak variable result 
    print('Hasil: ' + result)
else:
    print('Mohon masukkan nomor yang benar')
