package ExemploGet_Set;

public class TesteJavaBean {
    public static void main(String[] args) {
        Pessoa pessoa = new Pessoa();
            pessoa.setNome("Maria");
            pessoa.setIdade(27);
        System.out.println(pessoa.getNome() + " tem " + pessoa.getIdade() + " anos.");
    }
}