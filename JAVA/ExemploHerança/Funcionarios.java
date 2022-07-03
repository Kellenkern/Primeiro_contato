package ExemploHerança;

public class Funcionarios {
    protected String nome;
    protected String cpf;
    protected double salario;

    public String getNome() {
        return nome;
    }
        public void setNome(String nome) {
            this.nome = nome;
        }

    public double getBonificacao() {
        return this.salario * 0.10;
    }
        public void setSalario (double salario) {
            this.salario = salario;
        }



}   
