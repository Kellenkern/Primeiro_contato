package ExemploMetodos;
public class SomadorEnviarValor {
    double res;

    void somar(double num1, double num2) {
        if(num1 >0 ) {
            res = num1 + num2;
        }
        System.out.println ("A soma de " + num1 + "e " + num2 + " é igual a " + res);
    }
}