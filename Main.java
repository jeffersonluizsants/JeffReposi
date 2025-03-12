package org.example;
import java.util.*;
public class Main {
    private static Scanner sc = new Scanner(System.in);
    private static Queue<String> list = new LinkedList<>();

    public static void main(String[] args) {
        menu();
    }

    public static void menu() {
        System.out.println("Insira seu nome para começar: ");
        String nome = sc.nextLine();
        int criativo = 0;
        int pratico = 0;
        int colaborativo = 0;
        int analitico = 0;
        while (true) {
            System.out.println("============================================");
            System.out.println(nome + " Como você lida com desafios no trabalho ou estudo?\n" +
                    "A) Gosto de resolver sozinho e pensar em soluções criativas.\n" +
                    "B) Prefiro seguir um método já testado.\n" +
                    "C) Peço ajuda e discuto com outras pessoas.\n" +
                    "D) Analiso todas as possibilidades antes de decidir.");
            String p1 = sc.nextLine().toLowerCase();
            if (p1.equals("a") || p1.equals("b") || p1.equals("c") || p1.equals("d")) {
                list.add(p1);
                if (p1.equals("a")) criativo++;
                if (p1.equals("b")) pratico++;
                if (p1.equals("c")) colaborativo++;
                if (p1.equals("d")) analitico++;
                break;
            } else {
                System.err.println("Opção invalida");
            }
        }
            while (true) {
                System.out.println("============================================");
                System.out.println(nome + " Como você se comporta em grupo?\n" +
                        "A) Geralmente sou quem traz novas ideias e energiza o time.\n" +
                        "B) Sou focado e tento manter todos no caminho certo.\n" +
                        "C) Gosto de ouvir todos e garantir que todos participem.\n" +
                        "D) Analiso os riscos e evito decisões precipitadas.");
                String p2 = sc.nextLine().toLowerCase();
                if (p2.equals("a") || p2.equals("b") || p2.equals("c") || p2.equals("d")) {
                    list.add(p2);
                    if (p2.equals("a")) criativo++;
                    if (p2.equals("b")) pratico++;
                    if (p2.equals("c")) colaborativo++;
                    if (p2.equals("d")) analitico++;
                    break;
                } else {
                    System.err.println("Opção invalida");
                }
            }
        while (true) {
            System.out.println("============================================");
            System.out.println(nome + " O que mais te motiva em um projeto?\n" +
                    "A) Criar algo novo e inovador.\n" +
                    "B) Ver as coisas funcionando perfeitamente.\n" +
                    "C) Trabalhar com pessoas e ajudar a equipe a crescer.\n" +
                    "D) Resolver problemas complexos e encontrar padrões.");
            String p3 = sc.nextLine().toLowerCase();
            if (p3.equals("a") || p3.equals("b") || p3.equals("c") || p3.equals("d")) {
                list.add(p3);
                if (p3.equals("a")) criativo++;
                if (p3.equals("b")) pratico++;
                if (p3.equals("c")) colaborativo++;
                if (p3.equals("d")) analitico++;
                break;
            } else {
                System.err.println("Opção invalida");
            }
        }
        while (true) {
            System.out.println("============================================");
            System.out.println(nome + " Como você toma decisões importantes?\n" +
                    "A) Vou pelo instinto e criatividade.\n" +
                    "B) Baseio-me na lógica e no que já foi testado.\n" +
                    "C) Peço opiniões de pessoas em quem confio.\n" +
                    "D) Faço uma análise detalhada de prós e contras.");
            String p4 = sc.nextLine().toLowerCase();
            if (p4.equals("a") || p4.equals("b") || p4.equals("c") || p4.equals("d")) {
                list.add(p4);
                if (p4.equals("a")) criativo++;
                if (p4.equals("b")) pratico++;
                if (p4.equals("c")) colaborativo++;
                if (p4.equals("d")) analitico++;
                break;
            } else {
                System.err.println("Opção invalida");;
            }
            }
            while (true) {
                System.out.println("============================================");
                System.out.println(nome + " Se pudesse escolher qualquer profissão, qual escolheria?\n" +
                        "A) Artista, designer, publicitário.\n" +
                        "B) Engenheiro, desenvolvedor, arquiteto de software.\n" +
                        "C) Psicólogo, professor, gestor de pessoas.\n" +
                        "D) Cientista, pesquisador, analista de dados.\n");
                String p5 = sc.nextLine().toLowerCase();
                if (p5.equals("a") || p5.equals("b") || p5.equals("c") || p5.equals("d")) {
                    list.add(p5);
                    if (p5.equals("a")) criativo++;
                    if (p5.equals("b")) pratico++;
                    if (p5.equals("c")) colaborativo++;
                    if (p5.equals("d")) analitico++;
                    break;
                } else {
                    System.err.println("Opção invalida");
                }
            }

            String perfil = "";
            int resultado = Math.max(Math.max(criativo, pratico), Math.max(colaborativo, analitico));

            if (resultado == criativo) {
                perfil = " Criativo → JavaScript / Python\n" +
                        " Você gosta de inovação e liberdade para experimentar coisas novas. Seu estilo combina com linguagens que permitem criar soluções criativas, como JavaScript (para desenvolvimento web e front-end dinâmico) e Python (para automação, IA e desenvolvimento rápido)";
            } else if (resultado == pratico) {
                perfil = "Prático → Java / C#\n" +
                        "Você preza pela organização, confiabilidade e eficiência. Linguagens como Java e C# são ideais para você, pois oferecem robustez e são amplamente usadas em sistemas empresariais e aplicações de grande porte.";
            } else if (resultado == colaborativo) {
                perfil = "Colaborativo → Python / SQL\n" + "Você se destaca no trabalho em equipe e na comunicação. Linguagens como Python (pela simplicidade e aplicabilidade em diversas áreas) e SQL (para manipulação de bancos de dados) são perfeitas para quem gosta de conectar pessoas e informações.";
            } else {
                perfil = "Analítico →  C / R / Scala\n" +
                        "Você gosta de analisar dados, resolver problemas complexos e tomar decisões embasadas. Linguagens como C (pela precisão e controle), R (focada em estatística e análise de dados) e Scala (para programação funcional e big data) são ótimas para seu perfil.";
            }
            System.out.println(nome + " o seu perfil é:\n " + perfil);

        }
    }




