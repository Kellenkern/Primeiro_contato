package ExemploConta;
public class Conta {
        int numero;
        String cliente;
        double saldo;
        double limite;

    void saca(double quantidade) {
        double novoSaldo = this.saldo - quantidade;
        this.saldo = novoSaldo;
    }
    void deposita(double quantidade) {
        saldo += quantidade;
    }
  
}   