

<?php include('header.php');?>
<?php
    include "connection.php";
    $query = "SELECT * FROM `clients1`";
    $result = mysqli_query($connection , $query);
?>
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
    while($row = mysqli_fetch_assoc($query)){
?>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['Budget']?></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
</div>

    </div>


<?php include('includes/footer.php');?>