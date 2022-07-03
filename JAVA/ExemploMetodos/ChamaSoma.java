package ExemploMetodos;
import java.util.Scanner;

public class ChamaSoma {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        int opc=0;
        double var_num1=0;
        double var_num2=0;

        SomadorEnviarValor opera = new SomadorEnviarValor(); //usa o metodo de enviar os valores para a classe

        System.out.println("Informe o primeiro valor: ");
        var_num1 = ler.nextDouble();
        System.out.println("Informe o segundo valor: ");
        var_num2 = ler.nextDouble();

        opera.somar(var_num1, var_num2);

        /*SomadorAtribuirValor opera = new SomadorAtribuirValor(); //usa o metodo de atribuir valor para as variaveis da classe

        System.out.println("Informe o Primeiro Valor): ");
        var_num1 = ler.nextDouble();
        System.out.println("Informe o Segundo Valor): ");
        var_num2 = ler.nextDouble(); 

        opera.varnum1=var_num1;
        opera.varnum2=var_num2;

        opera.somar2();*/

        /*double resultado; //usa o metodo de retornar valor da classe.

        SomadorDevolveValor opera = new SomadorDevolveValor();

        System.out.println("Informe o Primeiro Valor): ");
        var_num1 = ler.nextDouble();
        System.out.println("Informe o Segundo Valor): ");
        var_num2 = ler.nextDouble();

        opera.varnum1=var_num1;
        opera.varnum2=var_num2;

        resultado=opera.somar3();
        System.out.println("Oresultado da soma é: " + resultado); */

    }
}