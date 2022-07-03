package ExemploHerança;

public class TesteGerente {
    public static void main(String[] args) {
        
        /*Gerente gerente = new Gerente();
        // podemos chamar métodos do Funcionario:
        gerente.setNome ("João da Silva");
        // e também métodos do Gerente!
        gerente.setSenha("1234");*/

        Gerente gerente = new Gerente();
        gerente.setSalario(5000.0);
        System.out.println(gerente.getBonificacao());
        
}}
