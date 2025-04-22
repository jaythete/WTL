import jakarta.servlet.http.*;  
import jakarta.servlet.*;  
import java.io.*; 
import java.sql.*;  

public class Connection1 extends HttpServlet {  
    public void doPost(HttpServletRequest req, HttpServletResponse res)  
    throws ServletException, IOException {  
        res.setContentType("text/html");  
        PrintWriter pw = res.getWriter();  //

        
            int id = Integer.parseInt(req.getParameter("t1"));
            String name = req.getParameter("t2");
            String author = req.getParameter("t3");
            double price = Double.parseDouble(req.getParameter("t4"));
            int quantity = Integer.parseInt(req.getParameter("t5"));
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/books", "root", "123456");
            PreparedStatement pst = con.prepareStatement("insert into bookshop values(?, ?, ?, ?, ?)"); //DML insert update delete
        
            pst.setInt(1, id);
            pst.setString(2, name);
            pst.setString(3, author);
            pst.setDouble(4, price);
            pst.setInt(5, quantity);
            int i = pst.executeUpdate();
            if(i==1)
            {
                pw.println("Record inserted successfully");
            }
            else
            {
                pw.println("Record not inserted");
            }
        } catch (Exception e) {
            pw.print(e);
        }  
        pw.println("</table>");
        pw.println("</body></html>");    
        pw.close();  
    }
}