<?php
    include "logic.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ef95e2206f.js" crossorigin="anonymous"></script>

    <!-- My CSS Style -->
    <link rel="stylesheet" href="styles.css">


    <title>Covid-19 Tracker</title>
  </head>
  <body>
    <div class="container-fluid bg-light p-4 text-center my-4">
        <h1>รายงานสถานการณ์ โควิด-19 แห่งประเทศไทย</h1>
        <h4>COVID-19 situation report in Thailand</h4>
    </div>
    
   
    <div class="up" >
    <h5 style="margin-left:1175px"><?php echo 'อัพเดทวันที่' .' ';    echo $updateDate ;?></h5>
    </div>

    <div class="container mt-4">
        <div class="row align-item-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-danger">
                        <div  style="text-align: center;">
                        <h5 class="text-light">ติดเชื้อสะสม</h5>
                        <p class="text-light"><?php echo $confirmed;?></p>
                        <p class="text-light"><?php echo ' [' . '+'. $newconfirmed .']'?></p>
                       </div>
                    </div>
                </div>
            </div>
   
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning">
                        <div  style="text-align: center;">
                        <h5 class="text-light">หายแล้ว</h5>
                        <p class="text-light"> <?php echo $recovered; ?></p>
                        <p class="text-light"><?php echo ' [' . '+'. $newrecovered .']'?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary">
                     <div style="text-align: center;" >
                        <h5 class="text-light">รักษาอยู่ รพ.</h5>
                        <p class="text-light"><?php echo $hospitalized;  ?></p>
                        <p class="text-light"><?php echo ' [' . ''. $newhospitalized .']'?></p>
                     </div>
                    </div>
                </div>
            </div>
    <br>
    <br>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div style="text-align: center;">
                        <h5 class="text-light">เสียชีวิต</h5>
                        <p class="text-light"><?php echo $deaths; ?></p>
                        <p class="text-light"><?php echo ' [' . '+'. $newdeaths .']' ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <table class="table">
            <thead class="table-dark">
                <tr>
                <div style="text-align: center;">
                    <th scope="col">วัน/เดือน/ปี</th>
                    <th scope="col">ติดเชื้อสะสม</th>
                    <th scope="col">หายแล้ว</th>
                    <th scope="col">รักษาอยู่ รพ.</th>
                    <th scope="col">เสียชีวิต</th>
                    </div>
                </tr>
               
            </thead>
            <tbody  class="table">
                <?php 
                    $count_date = count($dataline['Data'])-1;
                    for ($x = $count_date ; $x>=0; $x--){
                        ?>
                      <div style="text-align: center;">
                        <tr>
                        
                         <td class="table-light"><?php echo $dataline['Data'][$x]['Date'] ?></td>
                         <td class="table-light"><?php echo $dataline['Data'][$x]['Confirmed'] ?>
                         <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo $dataline['Data'][$x]['NewConfirmed']?></small>
                         </td>
                         <td class="table-light"><?php echo $dataline['Data'][$x]['Recovered'] ?>
                         <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo $dataline['Data'][$x]['NewRecovered']?></small>
                         </td>
                         <td class="table-light"><?php echo $dataline['Data'][$x]['Hospitalized'] ?>
                         <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo $dataline['Data'][$x]['NewHospitalized']?></small>
                         </td>
                         <td class="table-light"><?php echo $dataline['Data'][$x]['Deaths'] ?>
                         <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo $dataline['Data'][$x]['NewDeaths']?></small>
                         </td>
                        </tr>
                      </div>

<?php
                                     
                    }
                    ?>
            </tbody>
        </table>
    </div>
           

  </body>

</html>