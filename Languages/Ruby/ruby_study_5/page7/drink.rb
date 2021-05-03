require "./menu"

class Drink < Menu
  attr_accessor :volume
  
  # Definisikan method `info`
  def info
    return "#{self.name} $#{self.price} (#{self.volume}mL)"
  end
end

