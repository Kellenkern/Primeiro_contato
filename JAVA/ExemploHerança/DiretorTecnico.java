package ExemploHerança;


public class DiretorTecnico extends TecnicoAdministrativo {
    private String departamentoT;
    private String senha;
    private String data;
    
    public String getSenha() {
        return senha;
    }
    public String getDepartamentoT() {
        return departamentoT;
    }
        public String getData() {
        return data;
    }
    public void setData(String data) {
        this.data = data;
    }
    public void setDepartamentoT(String departamentoT) {
        this.departamentoT = departamentoT;
    }
        public void setSenha (String senha) {
            this.senha = senha;
        }
}
