<%@page import="java.sql.*"%>
<%@page import="java.util.*"%>
<%@page import="javax.servlet.http.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<html>
<body>
    <center>
        <h1>Thank You for Purchasing!!</h1>
    </center>
    <%
        HttpSession session = request.getSession();
        session.invalidate();
    %>
</body>
</html>
