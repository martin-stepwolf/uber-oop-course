class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        Car car = new Car("MZXS321", new Account("Martin", "123SXZM"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new UberX("MTZSG12", new Account("Martin2", "21GSZTM"), "Chevrolet", "Spark");
        car2.passenger = 3;
        car2.printDataCar();
    }
}