package ExemplosThis;
public class Carro {
    String fabricante;
    String modelo;
    String cor;
    int anoDeFabricacao;
    boolean biCombustivel;

    void alterarModelo(String modelo) {
        if (modelo != null) {
        this.modelo = modelo;
        }
    }
}
