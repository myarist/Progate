# Lakukan import class `Date` menggunakan `require`
require "date"

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
  
  def Menu.discount_day?
    # Hasilkan nilai `return' dari `today.sunday?`
    today = Date.today
    return today.sunday?
  end
end
