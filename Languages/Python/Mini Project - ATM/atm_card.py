class ATMCard:
    def __init__(self, defaultPin, defaultBalance):
        self.defaultPin = defaultPin
        self.defaultBalance = defaultBalance
        
    def cekPinAwal(self):
        return self.defaultPin
        
    def cekSaldoAwal(self):
        return self.defaultBalance
    
    