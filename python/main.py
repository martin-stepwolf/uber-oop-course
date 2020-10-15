from car import Car

if __name__ == "__main__":
    print("Hello World")
    car = Car()
    car.license = "AMS234"
    car.driver = "Martin"
    print(vars(car))

    car2 = Car()
    car2.license = "MTZSG12"
    car2.driver = "Martin2"
    print(vars(car2))