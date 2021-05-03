class Menu
  attr_accessor :name
  attr_accessor :price
  
  def info
    return "#{self.name} $#{self.price}"
  end
  
  # Definisikan method `get_total_price`
  def get_total_price(count)
    total_price = self.price * count
    if count >= 3
      total_price -= 1
    end
    return total_price
  end
end

menu1 = Menu.new
menu1.name = "Pizza"
menu1.price = 8

# Cetak nilai return dari method `get_total_price` dari instance `menu1`
puts menu1.get_total_price(3)
