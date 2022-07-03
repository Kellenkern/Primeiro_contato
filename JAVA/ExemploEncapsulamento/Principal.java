package ExemploEncapsulamento;
import java.util.Scanner;

public class Principal {
    public static void main(String[] args){
        Carro novo = new Carro();
        novo.marca = "Chevrolet";
        novo.modelo = "Prisma";
        novo.cor = "Prata";
        novo.km = 25000;
        novo.Situação = "Livre";

        try (Scanner ler = new Scanner(System.in)) {
            System.out.println("Informe o que deseja fazer com o carro escolhido: (1)Reservar (2)Locar (3)Devolver (4)Vizualizar: ");
            int operacao = ler.nextInt();
            
            if(operacao == 1) {
                novo.Reservar(novo.Situação);
            }
            if(operacao == 2) {
                novo.Locar(novo.Situação);
            }
            if(operacao == 3) {
                novo.Devolver(novo.Situação);
            }
            if(operacao == 4) {
                novo.Mostrar(novo.Situação);
            }
        }

    }
    

}
