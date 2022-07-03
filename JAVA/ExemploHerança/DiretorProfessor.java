package ExemploHerança;


public class DiretorProfessor extends Professores{
    private String departamentoP;
    private String senha;
    private String data;
    
    public String getSenha() {
        return senha;
    }
        public String getDepartamento() {
        return departamentoP;
    }
        public String getData() {
        return data;
    }
    public void setData(String data) {
        this.data = data;
    }
        public void setSenha (String senha) {
            this.senha = senha;
        }
    public void setDepartamentoP(String departamentoP) {
        this.departamentoP = departamentoP;
    }
}
