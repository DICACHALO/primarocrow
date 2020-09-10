<?php
 include("autentificacion.php"); 
 $us=($_SESSION['k_username']);
 echo "echooooo".$us;
      $query = "SELECT nom_solicitud, valor, monto, fecha_cancelacion, estado FROM tab_solicitud where id_persona='$us'";
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
                  <th>Estado</th>
                
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
                   <td><?php echo "$row[4]"; ?></td> 
                  
                            
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