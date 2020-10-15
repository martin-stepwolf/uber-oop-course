class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        Car car = new Car();
        car.license = "MZXS321";
        car.driver = "Martin";
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "MTZSG12";
        car2.driver = "Martin2";
        car2.passenger = 3;
        car2.printDataCar();
    }
}