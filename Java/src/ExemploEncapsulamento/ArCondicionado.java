package ExemploEncapsulamento;

public class ArCondicionado {
    private int temperatura;

    public void trocarTemperatura(int temperatura) {
        if (temperatura >= 15 && temperatura <=300) {
            this.temperatura = temperatura;
        }
    }

    public int obterTemperatura(){
        return temperatura;
    }
}