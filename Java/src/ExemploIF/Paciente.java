package ExemploIF;
import java.util.Scanner;

public class Paciente {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        String var_nome;
        double var_peso;
        double var_altura;
        int var_sexo;


        CalculoIMC Novo = new CalculoIMC();

        System.out.println("Informe seu nome: ");
        var_nome = ler.next();
        System.out.println("Informe seu peso: ");
        var_peso = ler.nextDouble();
        System.out.println("Informe sua altura: ");
        var_altura = ler.nextDouble();
        System.out.println("Informe seu sexo (1= masculino 2=feminino): ");
        var_sexo = ler.nextInt();
        
        Novo.imc(var_peso, var_altura);

        System.out.println("Seu imc é " + Novo.res);

        if (var_sexo == 1) {
            if(Novo.res <= 20.7) { 
                System.out.println("Abaixo do peso");
            }
            if(Novo.res > 20.7 & Novo.res <= 26.4) { 
                System.out.println("Peso normal");
            }
            if(Novo.res > 26.4 & Novo.res <= 27.8) { 
                System.out.println("Marginalmente acima do peso");
            }
            if(Novo.res > 27.8 & Novo.res <= 31.1) { 
                System.out.println("Acima do peso");
            }
            if(Novo.res > 31.1) { 
                System.out.println("Obeso");
            }
        }

        if (var_sexo == 2) {
            if(Novo.res <= 19.1) { 
                System.out.println("Abaixo do peso");
            }
            if(Novo.res > 19.1 & Novo.res <= 25.8) { 
                System.out.println("Peso normal");
            }
            if(Novo.res > 25.8 & Novo.res <= 27.3) { 
                System.out.println("Marginalmente acima do peso");
            }
            if(Novo.res > 27.3 & Novo.res <= 32.3) { 
                System.out.println("Acima do peso");
            }
            if(Novo.res > 32.3) { 
                System.out.println("Obeso");
            }
        }
    }
}
