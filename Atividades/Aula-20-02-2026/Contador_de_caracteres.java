package contador_de_caracteres;

import javax.swing.JOptionPane; // Importação do JOpitionPane.

public class Contador_de_caracteres {

    public static void main(String[] args) { // Classe principal.
        int t;
        String p;
        // digite(); // Ele tbm é inutil por repetir uma função e de forma desnecessaria.
        p = JOptionPane.showInputDialog("Digite uma palavra qualquer: "); // input para guardar o nome na variavel p.
        t = tamanho(p); // Chama a classe tamanho() com o parametro (p) junto, e alocando o resultado na variavel t.
        JOptionPane.showMessageDialog(null, p + " possui " + t + " caracteres."); // Mostra o resultado
    }
    
    /* static void digite() { // Classe desnecessaria por repetir uma função.
        JOptionPane.showMessageDialog(null, "Digite uma palavra: ");
    } */
    
    static int tamanho(String x) { // Classe para calcular a quantidade de caracteres.
        return x.length(); // retorna a quantidade de caracteres do nome para a classe principal.
    }
}

