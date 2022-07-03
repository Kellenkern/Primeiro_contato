package ExemploIfeWhile;
public class CalculoCalculadora {
    double res;

    void soma(double num1, double num2) {
        res=num1+num2;
        System.out.println(num1 + " + " + num2 + " = " + res);
    }

    void subtração(double num1, double num2) {
        res=num1-num2;
        System.out.println(num1 + " - " + num2 + " = " + res);
    }

    void multiplicação(double num1, double num2) {
        res=num1*num2;
        System.out.println(num1 + " * " + num2 + " = " + res);
    }

    void divisão(double num1, double num2) {
        res=num1/num2;
        System.out.println(num1 + " / " + num2 + " = " + res);
    }
}

