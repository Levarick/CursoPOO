from car import Car
from account import Account
if __name__ == "__main__":
  car = Car("ASHUA", Account("Julian Navarro", "1234ASD"))
  print(vars(car))
  print(vars(car.driver))