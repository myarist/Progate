require "./menu"

class Food < Menu
  attr_accessor :calorie
  
  # Definisikan method `initialize`
  def initialize(name:, price:, calorie:)
    self.name = name
    self.price = price
    self.calorie = calorie
  end
  
  def info
    return "#{self.name} $#{self.price} (#{self.calorie}kcal)"
  end
  
  def calorie_info
    return "#{self.name} mengandung #{self.calorie}kcal"
  end
end
