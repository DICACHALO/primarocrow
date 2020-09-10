
 <?php
 include("pgconect.php"); 
      $query = "SELECT nom_solicitud, valor, monto, fecha_cancelacion, id_solicitud FROM tab_solicitud";
      $result = pg_query($query);
              $total = pg_num_rows($result);
        if($total > 0) {
          ?>
          <table class="table table-striped">
              <thead>
              <h3>Proyectos que solicitan financiación</h3>
              <tr>
                  <th>Nombre Proyecto</th>
                  <th>Valor solicitado de financiamiento</th>
                  <th>Monto invertido actual</th>
                  <th>Fecha límite</th>
                  <th>Ver detalles</th>
                
              </tr>
            <tr>
              </thead>
              <tbody>
              <?php
              while ($row = pg_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo "$row[0]"; ?></td>
                  <td><?php echo "$row[1]"; ?></td>
                  <td><?php echo "$row[2]"; ?></td>
                  <td><?php echo "$row[3]"; ?></td> 
                  <td><form action="versolicitud.php" method="post">
                   <button name="boton" value="<?php echo "$row[4]"; ?>" class="btn btn-danger btn-sm">Ver</button> </form>
                    </form></td>        
                </tr>
              <?php  
              }
              ?>
              </tbody>
          </table>

          <a href="admin.php" class="btn btn-primary" align="center">Atras</a>
          <?php
        } else {
          echo "No se encontraron resultados";

          pg_close($dbconn);
        }
     
      // Cerrando la conexión

      ?>