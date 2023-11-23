

<?php include('includes/header.php');?>


<div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                                    <h4 class="mb-0">281</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                    last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">leaderboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                    <h4 class="mb-0">2,300</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than
                                    last month</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                                    <h4 class="mb-0 ">34k</h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than
                                    yesterday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person_add</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Followers</p>
                                    <h4 class="mb-0 ">+91</h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">Just updated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="fresh-table full-color-orange">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <div class="toolbar">
    <button id="alertBtn" class="btn btn-default">Alert</button>
  </div>

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="id">ID</th>
      <th data-field="name">Name</th>
      <th data-field="Email">Email</th>
      <th data-field="Budget">Budget</th>
      <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
    </thead>
    <tbody>
    <?php
    include "includes/connection.php";
    $requet = "SELECT * FROM `clients`";
    $query = mysqli_query($connection , $requet);
    while($row = mysqli_fetch_assoc($query)){
?>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['Budget']?></td>
      </tr>
      <!-- <tr>
        <td>2</td>
        <td>Minerva Hooper</td>
        <td>$23,789</td>
        <td>Curaçao</td>
        <td>Sinaai-Waas</td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Sage Rodriguez</td>
        <td>$56,142</td>
        <td>Netherlands</td>
        <td>Baileux</td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Philip Chaney</td>
        <td>$38,735</td>
        <td>Korea, South</td>
        <td>Overland Park</td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Doris Greene</td>
        <td>$63,542</td>
        <td>Malawi</td>
        <td>Feldkirchen in Kärnten</td>
        <td></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Mason Porter</td>
        <td>$78,615</td>
        <td>Chile</td>
        <td>Gloucester</td>
        <td></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Alden Chen</td>
        <td>$63,929</td>
        <td>Finland</td>
        <td>Gary</td>
        <td></td>
      </tr>
      <tr>
        <td>8</td>
        <td>Colton Hodges</td>
        <td>$93,961</td>
        <td>Nicaragua</td>
        <td>Delft</td>
        <td></td>
      </tr>
      <tr>
        <td>9</td>
        <td>Illana Nelson</td>
        <td>$56,142</td>
        <td>Heard Island</td>
        <td>Montone</td>
        <td></td>
      </tr>
      <tr>
        <td>10</td>
        <td>Nicole Lane</td>
        <td>$93,148</td>
        <td>Cayman Islands</td>
        <td>Cottbus</td>
        <td></td>
      </tr>
      <tr>
        <td>11</td>
        <td>Chaim Saunders</td>
        <td>$5,502</td>
        <td>Romania</td>
        <td>New Quay</td>
        <td></td>
      </tr>
      <tr>
        <td>12</td>
        <td>Josiah Simon</td>
        <td>$50,265</td>
        <td>Christmas Island</td>
        <td>Sint-Jans-Molenbeek</td>
        <td></td>
      </tr>
      <tr>
        <td>13</td>
        <td>Ila Poole</td>
        <td>$67,413</td>
        <td>Montenegro</td>
        <td>Pontevedra</td>
        <td></td>
      </tr>
      <tr>
        <td>14</td>
        <td>Shana Mejia</td>
        <td>$58,566</td>
        <td>Afghanistan</td>
        <td>Ballarat</td>
        <td></td>
      </tr>
      <tr>
        <td>15</td>
        <td>Lana Ryan</td>
        <td>$64,151</td>
        <td>Martinique</td>
        <td>Portobuffolè</td>
        <td></td>
      </tr>
      <tr>
        <td>16</td>
        <td>Daquan Bender</td>
        <td>$91,906</td>
        <td>Sao Tome and Principe</td>
        <td>Walhain-Saint-Paul</td>
        <td></td>
      </tr>
      <tr>
        <td>17</td>
        <td>Connor Wagner</td>
        <td>$86,537</td>
        <td>Germany</td>
        <td>Solihull</td>
        <td></td>
      </tr>
      <tr>
        <td>18</td>
        <td>Boris Horton</td>
        <td>$35,094</td>
        <td>Laos</td>
        <td>Saint-Mard</td>
        <td></td>
      </tr>
      <tr>
        <td>19</td>
        <td>Winifred Ryan</td>
        <td>$64,436</td>
        <td>Ireland</td>
        <td>Ronciglione</td>
        <td></td>
      </tr> -->
      <?php } ?>
    </tbody>
  </table>
</div>

    </div>


<?php include('includes/footer.php');?>