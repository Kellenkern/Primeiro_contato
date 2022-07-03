package ExemploIfeWhile;
import java.util.Scanner;

class Calculadora {
    public static void main(String[] args) {
        int opc=0;
        try (Scanner ler = new Scanner(System.in)) {
            CalculoCalculadora novo = new CalculoCalculadora();
      
            while (opc != 9) {
                System.out.println("Informe o Primeiro Valor: ");
                double num1 = ler.nextInt();

                System.out.println("Informe o Segundo Valor: ");
                double num2 =  ler.nextDouble();
                
                System.out.println("O que quer fazer? 1-Adição, 2-Subtração, 3-Divisão, 4-Multiplicação, 9-Fim");
                opc=ler.nextInt();

                if (opc == 1) {
                    novo.soma(num1, num2);
                }
                if (opc == 2) {
                    novo.subtração(num1, num2);
                }
                if (opc == 3) {
                    novo.multiplicação(num1, num2);
                }
                if (opc == 4) {
                    novo.divisão(num1, num2);
                }
            }
        }
    }
}