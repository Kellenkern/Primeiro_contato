package ExemploEncapsulamento;

public class Carro {
    String marca, modelo, cor, Situação;
    double km;
    
    public void Reservar(String situação){
        if (situação == "Livre"){
            System.out.println("Este carro está livre e foi reservado para você");
            System.out.println("Marca: " + marca);
            System.out.println("Modelo: " + modelo);
            System.out.println("Situação Atual: " + situação);
            this.Situação = "Reservado";
        }
        
        if (situação == "Reservado"){
            System.out.println("Este carro já está reservado, portanto não podemos reservar para você");
        } 

        if (situação == "Locado"){
            System.out.println("Este carro já está locado, portanto não podemos reservar para você");
        } 
    }

    public void Locar(String situação){
        if (situação == "Livre"){
            System.out.println("Este carro está livre e foi locado para você");
            System.out.println("Marca: " + marca);
            System.out.println("Modelo: " + modelo);
            System.out.println("Cor: " + cor);
            System.out.println("Km: " + km);

            this.Situação = "Locado";
        }

        if (situação == "Reservado"){
            System.out.println("Este carro já está reservado, portanto não podemos locar para você");
        } 

        if (situação == "Locado"){
            System.out.println("Este carro já está locado, portanto não podemos locar para você");
        }
    }

    public void Devolver(String situação){
        if (situação == "Reservado"){
            System.out.println("Carro sendo Devolvido");
            System.out.println("Marca: " + marca);
            System.out.println("Modelo: " + modelo);
            System.out.println("Cor: " + cor);
            System.out.println("Km: " + km);
            this.Situação = "Livre";
        } 

        if (situação == "Locado"){
            System.out.println("Carro sendo Devolvido");
            System.out.println("Marca: " + marca);
            System.out.println("Modelo: " + modelo);
            System.out.println("Cor: " + cor);
            System.out.println("Km: " + km);
            this.Situação = "Livre";}

        if (situação == "Livre"){
            System.out.println("Este carro já está livre, não precisa ser devolvido.");
            }
        }

    public void Mostrar(String situação){
        System.out.println("Esse é o carro escolhido:");
        System.out.println("-------------------------");
        System.out.println("Marca: " + marca);
        System.out.println("Modelo: " + modelo);
        System.out.println("Cor: " + cor);
        System.out.println("Km: " + km);
        System.out.println("Situação: " + Situação);
    }

}
