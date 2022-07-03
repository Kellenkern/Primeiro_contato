package ExemploHerança;

public class Gerente extends Funcionarios {
    String senha;
    int numeroDeFuncionariosGerenciados;

    public boolean autentica(String senha) {
        if (this.senha == senha) {
        System.out.println("Acesso Permitido!");
        return true;
        } else {
        System.out.println("Acesso Negado!");
        return false;
        }
    }

    public String getSenha() {
        return senha;
    }
        public void setSenha(String senha) {
            this.senha = senha;
        }
@Override
    public double getBonificacao() {
        return this.salario * 0.15;
    }
        public void setSalario (double salario) {
            this.salario = salario;
        }




}

