characters = [
  {name: "Ninja Ken", age: 14},
  {name: "Guru Domba"},
  {name: "Baby Ben", age: 5},
  {name: "Birdie"}
]

characters.each do |character|
  puts "--------------------"
  puts "Nama saya adalah #{character[:name]}"
  
  # Cetak usia dari karakter menggunakan simbol :age
  if character[:age]
    puts "Saya berusia #{character[:age]} tahun"
  else
    puts "Usiaku adalah sebuah rahasia"
  end
end
