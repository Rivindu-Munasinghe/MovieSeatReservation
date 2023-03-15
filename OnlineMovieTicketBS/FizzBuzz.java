Class FizzBuzz{
    public static void main(String[] args) {
        int i=0;
        for(i;i<=50;i++){
            if(i%3==0 && i%5==0 ){
                System.out.println("Fizz Buzz");
            }else if(i%3==0){
                System.out.println("Fizz");
            }else if(i%3==0){
                System.out.println("Fizz");
            }else if(i%3==0){
                System.out.println("Buzz");
            }else{
                System.out.println(i);
            }
        }
    }
}