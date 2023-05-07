import java.util.Scanner;

interface Calcular {
    void somar(double n1, double n2);
    void subtrair(double n1, double n2);
    void multiplicar(double n1, double n2);
    void dividir(double n1, double n2);
}

// Classe
class Calculadora implements Calcular {
    private double numero1;
    private double numero2;
    private double resultado;

    // MÉTODO CONSTRUTOR;
    public Calculadora(double n1, double n2) {
        setNum1(n1);
        setNum2(n2);
    }

    // MÉTODOS GETTERS;
    public double getNum1() {
        return numero1;
    }

    public double getNum2() {
        return numero2;
    }

    public double getResul() {
        return resultado;
    }

    // MÉTODOS SETTERS;
    public void setNum1(double n1) {
        numero1 = n1;
    }

    public void setNum2(double n2) {
        numero2 = n2;
    }

    public void setResul(double r) {
        resultado = r;
    }

    public void somar(double n1, double n2) {
        double soma = n1 + n2;
        setResul(soma);
        System.out.println("O resultado é: " + getResul());
    }

    public void subtrair(double n1, double n2) {
        double sub = n1 - n2;
        setResul(sub);
        System.out.println("O resultado é: " + getResul());
    }

    public void multiplicar(double n1, double n2) {
        double mult = n1 * n2;
        setResul(mult);
        System.out.println("O resultado é: " + getResul());
    }

    public void dividir(double n1, double n2) {
        double div = n1 / n2;
        setResul(div);
        System.out.println("O resultado é: " + getResul());
    }
}

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("1º número: ");
        double n1 = scanner.nextDouble();
        System.out.println("2º número: ");
        double n2 = scanner.nextDouble();

        Calculadora calculadora = new Calculadora(n1, n2);

        System.out.println("Escolha uma operação: ");
        System.out.println("1 - Adição");
        System.out.println("2 - Subtração");
        System.out.println("3 - Multiplicação");
        System.out.println("4 - Divisão");
        int operacao = scanner.nextInt();

        switch (operacao) {
            case 1:
                calculadora.somar(n1, n2);
                break;
            case 2:
                calculadora.subtrair(n1, n2);
                break;
            case 3:
                calculadora.multiplicar(n1, n2);
                break;
            case 4:
                calculadora.dividir(n1, n2);
                break;
            default:
                System.out.println("Operação inválida!");
        }
    }
}