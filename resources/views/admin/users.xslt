<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
    <html>
      <head>
        <style>
          table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
          }
          th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
          }
          th {
            background-color: #f2f2f2;
          }
        </style>
      </head>
      <body>
    
        <table>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th>tel</th>  
                                            <th>date_naissance</th>
                                         
                                         
          <tbody>
            <xsl:for-each select="//user">
              <tr>
                <td><xsl:value-of select="@username"/></td>
                <td><xsl:value-of select="@nom"/> <xsl:value-of select="@prenom"/></td>
                <td><xsl:value-of select="email"/></td>
                  <td><xsl:value-of select="tel"/></td>
                <td><xsl:value-of select="date_naissance"/></td>
              </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
