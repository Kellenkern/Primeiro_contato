package ExemploConta;
class PrincipalConta {
    public static void main(String[] args) {
        Conta minhaConta = new Conta();
        minhaConta.numero = 1006816;
        minhaConta.cliente = "Elisabete Rocha";
        minhaConta.saldo = 5000;
        minhaConta.limite = 2000;

        System.out.println ("Seu Saldo era: " + minhaConta.saldo);

        minhaConta.saca(200);
        minhaConta.deposita(500);

        System.out.println ("Seu Saldo Atual é: " + minhaConta.saldo);
    }
}
