class MenuItem:
    def __init__(self, name, price):
        self.name = name
        self.price = price

    def info(self):
        return self.name + ': $' + str(self.price)

    def get_total_price(self, count):
        total_price = self.price * count
        
        # Jika count lebih besar dari atau sama dengan 3, kalikan dengan 0.9

        if count >= 3:
            total_price *= 0.9
        
        # Bulatkan total_price ke nomor non-desimal terdekat dan return nilainya
        return round(total_price)
