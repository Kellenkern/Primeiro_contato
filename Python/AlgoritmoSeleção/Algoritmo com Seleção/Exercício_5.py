nome=(input("Digite seu nome: "))
id=int(input("Digite sua idade: "))

if(id<=15):
    print("Não pode votar!")
elif(id<18 and id>15):
    print("Jovem eleitor apto avotar!")
elif(id>18 and id<75):
    print("O voto é obrigatório!")
else:
    print("O voto é optativo")
