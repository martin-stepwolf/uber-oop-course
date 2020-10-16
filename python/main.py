from account import Account
from car import Car

if __name__ == "__main__":
    print("Hello World")

    car = Car("AMS234", Account("Martin", "432SMA"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("MTZSG12", Account("Martin2", "21GSZTM"))
    print(vars(car2))
    print(vars(car2.driver))