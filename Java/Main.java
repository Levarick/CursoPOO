package Java;

class Main {
  public static void main(String[] args) {
    UberVan car = new UberVan("ABR134", new Account("Andres Herrera", "ASDFVC"));
    car.setPassenger(6);
    car.getPassenger();
  }
}