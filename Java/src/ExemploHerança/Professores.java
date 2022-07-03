package ExemploHerança ;

public class Professores extends Servidores {
    protected String curso;
    protected String disciplina;

    public String getCurso() {
        return curso;
    }
        public void setCurso(String curso) {
            this.curso = curso;
        }
    public String getDisciplina() {
        return disciplina;
    }
        public void setDisciplina(String disciplina) {
            this.disciplina = disciplina;
        }
}
