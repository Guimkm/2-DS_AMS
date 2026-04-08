package com.mycompany.pessoas;
import javax.swing.JOptionPane;
public class Pessoas {

    public static void main(String[] args) {
        Pessoas pessoa = new Pessoas();
        
        pessoa.Nome = "Guilherme";
        pessoa.Sexo = "Masculino";
        pessoa.Pais = "Alemanha";
        
       pessoa.Atributos();
       pessoa.Andar();
       pessoa.Fala();
       pessoa.Corre();
       pessoa.Estudar();
       pessoa.Brinca();
    }
    
   String Nome;
   String Sexo;
   String Pais;
   
   void Andar() {
       System.out.println(Nome + " está andando");
   }
   
   void Fala() {
      System.out.println(Nome +" está falando");
   }
      
   void Corre() {
       System.out.println(Nome + " está correndo");
   }
         
    void Estudar() {
       System.out.println(Nome + " está Estudando");
   }
    
   void Brinca() {
       System.out.println(Nome + " está brincando");
   }
   
   void Atributos() {
       System.out.printf("Nome: " + Nome + "\nSexo: " + Sexo + "\nPais: " + Pais + "\n");
   }
}
