<?php
require('top.inc.php');
isAdmin();


$sql="select * from about order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Counting About JK Consruction </h4>
                        <!-- <h4 class="box-link"><a href="manage_agent.php">Add Agent</a> </h4> -->
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Area Population </th>

                                        <th>Total Properties</th>
                                        <th>Average House</th>
                                        <th>Total Branches</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                        <td class="serial"><?php echo $i?></td>
                                        </td>
                                        <td><?php echo $row['area_population']?></td>

                                        <td><?php echo $row['total_properties']?></td>
                                        <td><?php echo $row['average_house']?></td>
                                        <td><?php echo $row['total_branches']?></td>
                                        <td>
                                            <?php
								
								echo "<span class='badge badge-edit'><a href='manage_about.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
							
								
								?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>