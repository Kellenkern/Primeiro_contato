nome=(input("Digite seu nome: "))
n1=float(input("Digite a primeira nota do aluno: "))
n2=float(input("Digite a segunda nota do aluno: "))
n3=float(input("Digite a terceira nota do aluno"))
f=int(input("Digite a quantidade de faltas: "))

Md=(n1+n2+n3)/3

if(Md>=6 and f<20):
    print(nome,"sua média é",Md,"portanto está aprovada!")
else:
    print(nome,"sua média é",Md,"portanto está reprovada!")