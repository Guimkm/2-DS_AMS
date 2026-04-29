package com.mycompany.custosviagens;

class ConversorNumeros {
    public Integer stringToInt(String numero) {
        int conversor = Integer.parseInt(numero);
        return (conversor);
    }

    public Double stringToDouble(String numero) {
        double conversor = Double.parseDouble(numero);
        return (conversor);
    }

    public String intToString(int numero) {
        String conversor = String.valueOf(Long.parseLong(String.valueOf(numero)));
        return (conversor);
    }

    public String doubleToString(double numero) {
        String conversor = String.valueOf(Long.parseLong(String.valueOf(numero)));
        return (conversor);
    }
}
