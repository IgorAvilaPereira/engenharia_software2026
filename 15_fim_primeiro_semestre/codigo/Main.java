import java.util.ArrayList;
import java.util.List;

import javax.swing.JOptionPane;

public class Main {
    public static void main(String[] args) {
        
        Selecao brasil = new Selecao();
        brasil.setNome("Brasil");
        List<Jogador> jogadores = new ArrayList<>();
        Jogador roberto = new Jogador();
        roberto.setNome("Roberto");

        brasil.setJogadores(jogadores);

        brasil.getJogadores().add(roberto);
        roberto.setSelecao(brasil);


        Jogador igor = new Jogador();
        igor.setNome("Igor");
        brasil.getJogadores().add(igor);
        igor.setSelecao(brasil);

        System.out.println(roberto.getSelecao().getNome());
        System.out.println(brasil.getJogadores().get(0).getNome());
        System.out.println(brasil.getJogadores().get(1).getNome());
    }   
    
}
