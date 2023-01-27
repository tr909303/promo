import java.io.FileInputStream;
import javazoom.jl.player.Player;

public class Main {
    public static void main(String[] args) {
        try {
            FileInputStream fis = new FileInputStream("path/to/file.mp3");
            Player playMP3 = new Player(fis);
            playMP3.play();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
