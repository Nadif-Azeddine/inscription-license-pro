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
         <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                       <th>departement</th>
                                            <th>nom</th>
                                          
                                            <th>specialite</th>                  
          <tbody>
            <xsl:for-each select="//licence">
              <tr>
               <td><xsl:value-of select="////department[id = current()/departement]/departement_nom"/></td>
        <td> <xsl:value-of select="////specialite[id = current()/specialite]/libelle"/></td>
                <td><xsl:value-of select="nom_licence"/></td>
              </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
