require "./menu"

class Food < Menu
  attr_accessor :calorie
  
  def calorie_info
    return "#{self.name} mengandung #{self.calorie}kcal"
  end
end
