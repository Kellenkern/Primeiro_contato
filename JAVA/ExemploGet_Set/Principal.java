package ExemploGet_Set;
import java.util.Scanner;

public class Principal {
    public static void main(String[] args) {
    
        Conta minhaConta = new Conta();
        minhaConta.setNumero(1006816);
        minhaConta.setCliente("Elisabete Rocha");
        minhaConta.setSaldo(5000);
        minhaConta.setLimite(2000);
        minhaConta.setContaAtiva("V");

        Scanner ler = new Scanner(System.in);
        
        System.out.println("O que deseja fazer? (1 = Sacar 2 = Depositar 3 = Consultar Saldo 4 = Abrir Conta 5 = Fechar conta)");
        int operação = ler.nextInt();

        if (operação == 1) {
            System.out.println("Qual o valor?");
            double quantidade = ler.nextDouble();

            minhaConta.saca(quantidade);
        }

        if (operação == 2) {
            System.out.println("Qual o valor?");
            double quantidade = ler.nextDouble();

            minhaConta.deposita(quantidade);
        }

        if (operação == 3) {
            minhaConta.consultaSaldo();
        }

        if (operação == 4) {
            System.out.println("Digite o numero da sua conta: ");
            int var_numero = ler.nextInt();

            System.out.println("Digite seu nome: ");
            String var_cliente = ler.next();

            minhaConta.abrirConta(var_numero, var_cliente);
        }

        if (operação == 5) {
            System.out.println("Digite o numero da sua conta: ");

            System.out.println("Digite se sua conta está ativa (V = Ativada F = Desativada): ");
            String var_contaAtiva = ler.next();

            minhaConta.fecharConta(var_contaAtiva);
        }
    }
}

