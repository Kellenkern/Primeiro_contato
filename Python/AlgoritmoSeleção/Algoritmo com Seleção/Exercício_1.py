n1=float(input("Digite a primeira nota do aluno: "))
n2=float(input("Digite a segunda nota do aluno: "))
n3=float(input("Digite a terceira nota do aluno: "))
Md=(n1+n2+n3)/3
if(Md>6):
    print("Aluno Arovado com média ",Md)
else:
    print("Aluno reprovado com média ",Md)