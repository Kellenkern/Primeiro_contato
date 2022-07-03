package ExemploGet_Set;

public class Conta {
        private int numero;
        private String cliente;
        private double saldo;
        private double limite;
        private String ContaAtiva;

    void saca(double quantidade) {
        if (getContaAtiva() == "V"){
            if(quantidade > 0) {
                if (quantidade < (getSaldo() + getLimite())) { 
                    double novoSaldo = this.getSaldo() - quantidade;
                    this.setSaldo(novoSaldo);
                    System.out.println("Você sacou " + quantidade + ", então ainda tem " + getSaldo()); 
                } else { System.out.println("Seu valor deve ser menor que seu saldo atual");}    
            } else { System.out.println("Seu valor de saque deve ser maior que zero.");}
        }else {System.out.println("Sua conta deve estar ativa para poder realizar saques");}
        
    }
    public String getContaAtiva() {
        return ContaAtiva;
    }
    public void setContaAtiva(String contaAtiva) {
        this.ContaAtiva = contaAtiva;
    }
    public double getLimite() {
        return limite;
    }
    public void setLimite(double limite) {
        this.limite = limite;
    }
    public String getCliente() {
        return cliente;
    }
    public void setCliente(String cliente) {
        this.cliente = cliente;
    }
    public double getSaldo() {
        return saldo;
    }
    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }
    public int getNumero() {
        return numero;
    }
    public void setNumero(int numero) {
        this.numero = numero;
    }
    void deposita(double quantidade) {
        if (getContaAtiva() == "V"){
            if(quantidade > 0 ) {
                setSaldo(getSaldo() + quantidade);
                System.out.println("Você depositou " + quantidade + ", então seu novo saldo é de " + getSaldo());
            } else { System.out.println("Seu valor de deposito deve ser maior que zero.");}
        } else {System.out.println("Sua conta deve estar ativa para poder realizar depósitos");}
        
    }
  
    void consultaSaldo () {
        System.out.println("Seu saldo atual é R$ " + getSaldo());
    }

    void abrirConta ( int numero, String cliente){
        this.setNumero(numero);
        this.setCliente(cliente);
        this.setSaldo(0);
        this.setLimite(2500);
        this.setContaAtiva("V");

        System.out.println("Sua conta foi aberta nas seguinntes condições:");
        System.out.println("Numero da conta: " + this.getNumero());
        System.out.println("Nome do cliente: " + this.getCliente());
        System.out.println("Saldo da conta: " + this.getSaldo());
        System.out.println("Limite da conta: " + this.getLimite());

    }

    void fecharConta (String ContaAtiva){
    
        this.setContaAtiva(ContaAtiva);

        if(ContaAtiva == "V") {
        System.out.println("Sua conta foi fechada.");    
        } 
        if (ContaAtiva == "F") {
            System.out.println("Essa conta já esta fechada em nosso cadastro");
        } else {System.out.println("Não entendi pode repetir o processo");}
    }
}   

