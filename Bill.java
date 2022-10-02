public class Bill {
    private int patientID;
    private double pharmacyCharges;
    private double roomCharges;
    private double doctorFees;
    Bill(int patientID, double pharmacyCharges, double roomCharges, double doctorFees)
    {     this.patientID = patientID;
        this.pharmacyCharges = pharmacyCharges;
        this.roomCharges = roomCharges;
        this.doctorFees = doctorFees;   }
    public void setPatientID(int patientID)
    {     this.patientID = patientID;   }
    public void setPharmacyCharges(double pharmacyCharges)
    {     this.pharmacyCharges = pharmacyCharges;   }
    public void setDoctorFees(double doctorFees) {     this.doctorFees = doctorFees;   }
    public void setRoomCharges(double roomCharges)
    {     this.roomCharges = roomCharges;   }
    public int getPatientID() {     return patientID;   }
    public double getPharmacyCharges()
    {     return pharmacyCharges;   }
    public double getRoomCharges()
    {     return roomCharges;   }
    public double getDoctorFees()
    {     return doctorFees;   }
    @Override
    public String toString()
    {     String bill = "Pharmacy Charges: $" + pharmacyCharges +
            "\nRoom Charges: $" + roomCharges +
            "\nDoctor Fees: $" + doctorFees +
            "\n----------------------------------------\n" +
            "Total Charges: " + (pharmacyCharges + roomCharges + doctorFees);
        return bill;   }
}
