package Java;

public class UberVan extends Car {
  public UberVan(String license, Account driver){
    super(license, driver);
  }

  @Override
  public void setPassenger(Integer passenger) {
    if (passenger == 6) {
      this.passenger = passenger;
    } else {
      System.out.println("Necesitas asignar 6 pasajeros") ;
    }
  }
}
