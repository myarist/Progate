class Menu
  attr_accessor :name
  attr_accessor :price
  
  def info
    # Hasilkan nilai return "Nama dan harga akan di cetak"
    return "Nama dan harga akan di cetak"
  end
end

menu1 = Menu.new
menu1.name = "Pizza"
menu1.price = 8

# Cetak nilai return dari method instance `info` dari instance `menu1`
puts menu1.info
