class Menu
  attr_accessor :name
  attr_accessor :price
  
  def info
    # Isilah di dalam #{}
    return "#{self.name} $#{self.price}"
  end
end

menu1 = Menu.new
menu1.name = "Pizza"
menu1.price = 8

puts menu1.info
