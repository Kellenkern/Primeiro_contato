package ExemploConstrutor;

public class Pessoa {
    String nome;
    int idade;

    //Construtor
    Pessoa(String nome) {
        this.nome = nome;
    }

    //Construtor
    Pessoa(String nome, int idade) {
        this.nome = nome;
        this.idade = idade;
    }
}
