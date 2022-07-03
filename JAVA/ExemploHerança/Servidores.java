package ExemploHerança;

public class Servidores {
    protected String nome;
    protected String cpf;
    protected String email;
    protected String fone;
    protected double salario;

    public String getNome() {
        return nome;
    }
        public void setNome(String nome) {
            this.nome = nome;
        }
    public String getCpf() {
        return cpf;
    }
        public void setCpf(String cpf) {
            this.cpf = cpf;
        }
    public String getEmail() {
        return email;
    }
        public void setEmail(String email) {
            this.email = email;
        }
    public String getFone() {
        return fone;
    }
        public void setFone(String fone) {
            this.fone = fone;
        }

    public double getBonificacao() {
        return this.salario * 0.10;
    }
        public void setSalario (double salario) {
            this.salario = salario;
        }
}
