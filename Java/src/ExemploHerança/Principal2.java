package ExemploHerança;

public class Principal2 {
    public static void main(String[] args) {
        
        Professores ana = new Professores();
        ana.setNome ("Ana Paula da Silva");
        ana.setCpf("123.456.798-53");
        ana.setEmail("anasilva@ifsul.edu.br");
        ana.setFone("51 99123-4567");
        ana.setSalario(3900);
        ana.setCurso("Informática");
        ana.setDisciplina("Biologia");

        DiretorProfessor Carla = new DiretorProfessor();
        Carla.setNome ("Carla de Souza");
        Carla.setCpf("888.888.888-88");
        Carla.setEmail("carlasouza@ifsul.edu.br");
        Carla.setFone("51 99765-4321");
        Carla.setSalario(5500);
        Carla.setCurso("Informática");
        Carla.setDisciplina("Projetos");
        Carla.setData("10-05-2020");
        Carla.setSenha("5678");
        Carla.setDepartamentoP("Cotin");

        TecnicoAdministrativo pedro = new TecnicoAdministrativo();
        pedro.setNome ("Pedro Alves");
        pedro.setCpf("999.999.999-99");
        pedro.setEmail("pedroalves@ifsul.edu.br");
        pedro.setFone("51 99999-9999");
        pedro.setSalario(5000);
        pedro.setDepartamento("Cotin");

        DiretorTecnico joao = new DiretorTecnico();
        joao.setNome ("João Correia");
        joao.setCpf("777.777.777-77");
        joao.setEmail("joaocorreia@ifsul.edu.br");
        joao.setFone("51 99777-7777");
        joao.setSalario(4850);
        joao.setDepartamento("Corac");
        joao.setData("08-05-2019");
        joao.setSenha("1234");
        
        System.out.println("Nosso quadro de professores é: ");
        System.out.println("Nome: " + ana.getNome() + " Professor(a) de: " + ana.getCurso());
        System.out.println("Nome: " + Carla.getNome() + " Professor(a) de: " + Carla.getCurso());
        System.out.println("Nosso quadro de Tecnicos Administrativos é: ");
        System.out.println("Nome: " + pedro.getNome() + " Departamento: " + pedro.getDepartamento());
        System.out.println("Nome: " + joao.getNome() + " Departamento: " + joao.getDepartamento());
        System.out.println("Nosso(a) Diretor(a) do departamento " + Carla.getDepartamento());
        System.out.println("Nome: " + Carla.getNome());
        System.out.println("Nosso(a) Diretor(a) do departamento " + joao.getDepartamento());
        System.out.println("Nome: " + joao.getNome());


    }        
}
