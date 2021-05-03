class Menu
  attr_accessor :name
  attr_accessor :price
  
  # Definisikan method `info`
  def info
    puts "Nama dan harga akan tercetak"
  end
end

menu1 = Menu.new
menu1.name = "Pizza"
menu1.price = 8

# Panggil method `info` dari instance `menu1`
menu1.info
