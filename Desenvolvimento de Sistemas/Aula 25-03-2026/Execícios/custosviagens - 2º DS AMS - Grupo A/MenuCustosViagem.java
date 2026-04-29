package com.mycompany.custosviagens;

public class MenuCustosViagem {
    private Percurso percurso;
    private Custos custos;
    private ConversorNumeros conversor;
    private EntradaSaidaDados io;
    private int opcao;
    
    public void executarCustosViagem(){
        this.io = new EntradaSaidaDados();
        this.conversor = new ConversorNumeros();
        this.custos = new Custos();
        this.percurso = new Percurso();
        this.opcao = -1;
        
        do {
            executarMenuPrincipal();
            avaliarOpcaoEscolhida();
        } while(this.opcao != 0);
}
    private void executarMenuPrincipal(){
        String mensagemMenu = "Escolha uma opção:"
                + "\n\n1 - Calcular custo da viagem"
                + "\n0 - Sair";
        String entradaDados = io.entradaDados(mensagemMenu);
        this.opcao = conversor.stringToInt(entradaDados);
}
    private void avaliarOpcaoEscolhida(){
    String saida;
    double kmPercorrido=0, valorCombustivel=0, valorPedagio=0;
        if (this.opcao != 0 && this.opcao < 2) { 
            String mensagemEntrada = "Escreva os quilômetros percorridos na viagem: ";
            kmPercorrido = conversor.stringToDouble(io.entradaDados(mensagemEntrada));
    
            mensagemEntrada = "Escreva o valor do combustivel: ";
            valorCombustivel = conversor.stringToDouble(io.entradaDados(mensagemEntrada));
    
            mensagemEntrada = "Escreva o valor do pedagio: ";
            valorPedagio = conversor.stringToDouble(io.entradaDados(mensagemEntrada));
    }
       switch(this.opcao){
    case 0:
        System.exit(0);
    break;
    
    case 1:
    this.percurso.cadastrarPercurso(kmPercorrido, valorCombustivel, valorPedagio);
    this.custos.calculaViagem(percurso);
    double result = this.custos.getTotalPercurso();
    saida = this.percurso.listarPercurso() + "\n\nO custo total da viagem é: R$" + result;
    this.io.saidaDados(saida);
    break;
    
    default:
    this.io.saidaDados("Opção invalida");
    break;
    }  
  }
}
