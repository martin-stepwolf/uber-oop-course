console.log("hello world");

var car = new Car("MZXS321", new Account("Martin", "123SXYM"));
car.passenger = 3;
car.printDataCar();

var car2 = new UberX("MTZSG12", new Account("Martin2", "21GSZTM"), "Chevrolet", "Spark");
car2.passenger = 3;
car2.printDataCar();