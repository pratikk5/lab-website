import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        System.out.print("Enter the name of the fruit :");
        Scanner in =new Scanner(System.in);
        String fruit=in.next();

        switch (fruit) {
            case "apple" -> System.out.println("one of the small and sweetest fruit");
            case "orange" -> System.out.println("round fruit");
            case "grapes" -> System.out.println("small fruit");
            case "banana" -> System.out.println("long fruit");
            default -> System.out.println("Enter the valid name of the fruit");
        }
        System.out.println("Eat healthy fruits and stay healthy");

//        switch (fruit){
//            case "apple":
//                System.out.println("one of the small and sweetest fruit");
//                break;
//            case "orange":
//                System.out.println("round fruit");
//                break;
//            case "grapes":
//                System.out.println("small fruit");
//                break;
//            case "banana":
//                System.out.println("long fruit");
//                break;
//            default:
//                System.out.println("Enter the valid name of the fruit");



//        if (fruit.equals("mango")){
//            System.out.println("King of fruit");
//        }
//
//        if (fruit.equals("apple")){
//            System.out.println("a red sweet fruit");
//        }
    }

}

