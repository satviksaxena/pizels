<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html xmlns="http://www.w3.org/1999/xhtml">
<body bgcolor="black" style="color:white">
<center>
<h2><u><b><div style="color:red;">Offline coaching data entry </div></b></u></h2>
<table border="3">
  <tr bgcolor="grey">
     <th style="text-align:left">ID</th>
     <th style="text-align:left">name</th>
     <th style="text-align:left">country</th>
     <th style="text-align:left">email</th>
     <th style="text-align:left">phone</th>
     <th style="text-align:left">branch</th>
  </tr>
  <xsl:for-each select="student/info">
  <tr>
  		<td><xsl:value-of select="id"/></td>
  		<td><xsl:value-of select="name"/></td>
  		<td><xsl:value-of select="country"/></td>
  		<td><xsl:value-of select="email"/></td>
  		<td><xsl:value-of select="phone"/></td>
  		<td><xsl:value-of select="branch"/></td>
  </tr>
  </xsl:for-each>
  </table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>  


