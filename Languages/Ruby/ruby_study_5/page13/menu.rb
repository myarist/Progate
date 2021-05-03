class Menu
  attr_accessor :name
  attr_accessor :price
  
  def initialize(name:, price:)
    self.name = name
    self.price = price
  end
  
  def info
    return "#{self.name} $#{self.price}"
  end
  
  def get_total_price(count)
    total_price = self.price * count
    if count >= 3
      total_price -= 1
    end
    return total_price
  end
  
  # Definisikan method class `discount_day?`
  def Menu.discount_day?
  end
end
