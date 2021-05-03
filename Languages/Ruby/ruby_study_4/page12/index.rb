class Menu
  attr_accessor :name
  attr_accessor :price
  
  # Tulis ulang method `initialize`
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
end

# Tambahkan argument kata kunci untuk `name` dan `price`
menu1 = Menu.new(name: "Sushi", price: 10)

puts menu1.info
