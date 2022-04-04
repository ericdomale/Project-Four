<div class="details2">
             <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Sunday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                           $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Tuesday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Tuesday Service' AND offertype='Tuesday Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Tuesday Service' AND offertype='Tuesday Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Friday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Friday Night Service' AND offertype='Friday Night Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Friday Night Service' AND offertype='Friday Night Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>
             </div>






             
             <div class="cardBox">
             <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(expamount) AS sum FROM `expenses`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Expenses</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-credit-card"></i>
                    </div>
                </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                           <?php $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(eincome) AS sum FROM `events`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                            ?>
                            <?php echo $output; ?>
                            </div>
                                <div class="cardName">Events Income</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-usd"></i>
                            </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                                    <?php

                                $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                $query = "SELECT staffno FROM staff";
                                $query_run = mysqli_query($conn,$query);

                                $row = mysqli_num_rows($query_run);

                                echo $row;

                                    ?>
                            </div>
                                <div class="cardName">Staff</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-camera-retro"></i>
                            </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                                    <?php

                                $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                $query = "SELECT staffno FROM staff";
                                $query_run = mysqli_query($conn,$query);

                                $row = mysqli_num_rows($query_run);

                                echo $row;

                                    ?>
                            </div>
                                <div class="cardName">Staff</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-lemon-o"></i>
                            </div>
                    </div>
                </div>
