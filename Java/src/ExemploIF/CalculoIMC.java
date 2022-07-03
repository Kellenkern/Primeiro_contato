package ExemploIF;
public class CalculoIMC {
    double res;

    void imc(double peso, double altura) {

        res = peso/(altura*altura);

        //System.out.println("O icm é de: " + res);
    }
}
