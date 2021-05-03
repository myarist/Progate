require "./menu"

class Food < Menu
  attr_accessor :calorie
  
  # Definisikan method `info`
  def info
    return "#{self.name} $#{self.price} (#{self.calorie}kcal)"
  end
  
  def calorie_info
    return "#{self.name} mengandung #{self.calorie}kcal"
  end
end
