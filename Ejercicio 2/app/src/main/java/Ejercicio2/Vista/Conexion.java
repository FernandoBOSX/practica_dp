package Ejercicio2.Vista;



import java.sql.*;

public class Conexion {

	public int guardarDatos(String id,String fechaRegistro,String nombre,String apellidoPaterno,String apellidoMaterno,String calle,String numeroCasa,String colonia){
    {
        
    	Connection myConn = null;
		PreparedStatement myStmt = null;
		ResultSet myRs = null;
		
		try {
			// 1. Get a connection to database
			myConn = DriverManager.getConnection("jdbc:mysql://localhost:8080/practica_dp", "root" , "pass");
			
			// 2. Prepare statement
			myStmt = myConn.prepareStatement("EXEC GUARDAR_DISTRIBUIDOR ? ? ? ? ? ? ? ?");
			
			// 3. Set the parameters
			myStmt.setString(1, id);
                        myStmt.setString(2,fechaRegistro);
                        myStmt.setString(3,nombre);
                        myStmt.setString(4,apellidoPaterno);
                        myStmt.setString(5,apellidoMaterno);
                        myStmt.setString(6,calle);
                        myStmt.setString(7,numeroCasa);
                        myStmt.setString(8,colonia);
                       
			// 4. Execute SQL query
			myRs = myStmt.executeQuery();
			

		}
		catch (Exception exc) {
				exc.printStackTrace();
	}
    }
            return 0;
        }
}