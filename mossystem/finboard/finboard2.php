<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finboard</title>
    <link rel="stylesheet" href="finboard.css">
    <link rel="stylesheet" href="../jquery/font-awesome.min.css" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
</head>
<body>

           <!-- <header>
                <img src="../icons/System/dashboard-line.svg" alt="logo" class="logo">
                <h2 class="heading">Adminboard.</h2>
                <nav>
                    <ul class="nav_links">
                        <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
                        <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
                        <li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
                    </ul>
                </nav>
                <a href="#"><button  id="show-login" name="show-login">Add Member</button></a>  
            </header>-->
            


            <div class="container">
        <div class="navigation">
            <ul>
                <li>
                   <a href="">
                     <span class="icon"><img src="../bicons/menu-app-fill.svg" alt="logo" class="logo"></span>
                     <span class="title"><h2>Finboard.</h2></span>
                   </a>
                </li>
                <li>
                   <a href="../offerings/finofferings.php">
                     <span class="icon"><i class="fas fa-user"></i></span>
                     <span class="title">Offerings</span>
                   </a>
                </li>
                <li>
                    <a href="../tithes/fintithe.php">
                     <span class="icon"><i class="fas fa-usd"></i></span>
                     <span class="title">Tithes</span>
                    </a>
                </li>
                <li>
                    <a href="../pledges/finpledges.php">
                     <span class="icon"><i class="fas fa-credit-card"></i></span>
                     <span class="title">Pledges</span>
                    </a>
                </li>
                <li>
                    <a href="../expenses/finexpenses.php">
                     <span class="icon"><i class="fas fa-bar-chart-o"></i></span>
                     <span class="title">Expenses</span>
                    </a>
                </li>
                <li>
                    <a href="../books/finbooks.php">
                     <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                     <span class="title">Books</span>
                    </a>
                </li>
                <li>
                    <a href="../procurement/finprocurement.php">
                     <span class="icon"><i class="fas fa-bullseye"></i></span>
                     <span class="title">Procurements</span>
                    </a>
                </li>
                <!--<li>
                    <a href="../churchprograms/program.php">
                     <span class="icon"><i class="fas fa-users"></i></span>
                     <span class="title">Church Programs</span>
                    </a>
                </li>
                <li>
                    <a href="../schools/schools.php">
                     <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                     <span class="title">Schools</span>
                    </a>
                </li>
                <li>
                    <a href="../settingsphp/settings.php">
                     <span class="icon"><i class="fas fa-cog"></i></span>
                     <span class="title">Admin & More</span>
                    </a>
                </li>-->
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder=" Search here...">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
               <div class="user">
                    <!--<img src="giwc7.jpg">-->
                    <a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a>
                </div>
            </div>

            <div class="cardBox">
             <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(ofamount) AS sum FROM `offerings`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">OFFERINGS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user-circle"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(titamount) AS sum FROM `tithes` ";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">TITHES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(pdgamount) AS total FROM `pledges`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){
                                
                                $sum = $row['total'];
                                

                            }; 
                           ?>
                           <?php echo 'GHS '.number_format($sum); ?>
                        </div>
                        <div class="cardName">PLEDGES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-chess-knight"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(expamount) AS sum FROM `expenses`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">EXPENSES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-male"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(retamount) AS sum FROM `books`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">BOOKS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-female"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(titamount) AS sum FROM `indietithes`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">INDIVIDUAL TITHES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-address-book"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT SUM(titamount) AS sum FROM `jointithes`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">CORPORATE TITHES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT (SELECT SUM(ofamount) FROM `offerings`) + (SELECT SUM(titamount) FROM `tithes`) AS sum";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHS '.number_format($row['sum']);

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">REVENUE</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-street-view"></i>
                    </div>
                </div>
            </div>
            

             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>RECENT PLEDGES</h2>
                            <!--<a href="" class="btn">View All</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Name</td>
                                <td>Status</td>
                                <td>Program/Event</td>
                                <td>Month</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT * FROM pledges WHERE pdgstatus='Unpaid' ORDER BY pdgid DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['pdgdate'];?></td>
                                <td><?php echo $row['pledger'];?></td>
                                <td><?php echo $row['pdgstatus'];?></td>
                                <td><?php echo $row['pdgprogram'];?></td>
                                <td><?php echo $row['pdgmonth'];?></td>
                                <td><span class="status"><?php echo number_format($row['pdgamount']);?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>DAILY OFFERING</h2>
                        <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT offdate, ofamount FROM offerings  ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.number_format($row['sum']);

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            <!-- </td>
                            <tr>
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





             <div class="details">
             <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>RECENT OFFERINGS</h2>
                            <!--<a href="" class="btn">Overview</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>WEEK</td>
                                <td>DATE</td>
                                <td>PROGRAM/EVENT</td>
                                <td>TYPE</td>
                                <td>AMOUNT</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT offid, offweek, offdate, offprogram, offertype, ofamount FROM offerings ORDER BY offid DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['offweek'];?></td>
                                <td><?php echo $row['offdate'];?></td>
                                <td><?php echo $row['offprogram'];?></td>
                                <td><?php echo $row['offertype'];?></td>
                                <td><span class="status"><?php echo $row['ofamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>MONTHLY EXPENSES</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT expmonth, SUM(expamount) AS expamount FROM expenses GROUP BY expmonth DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
                                 <td><h4><?php echo $row['expmonth'];?><br><span class="status">GHS<?php echo $row['expamount'];?></span></h4></td>
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(expamount) AS sum FROM expenses";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHS '.number_format($row['sum']);

                                    }; 
                                ?>
                                <?php echo $output;?>
                            <!--</td>
                             <tr>
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






             <div class="details">
             <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>RECENT EXPENSES</h2>
                            <!--<a href="" class="btn">Overview</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>MONTH</td>
                                <td>NAME</td>
                                <td>CATEGORY</td> 
                                <td>PAYMENT MODE</td>
                                <td>AMOUNT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT * FROM expenses ORDER BY expid DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['expdate'];?></td>
                                <td><?php echo $row['expmonth'];?></td>
                                <td><?php echo $row['expname'];?></td>
                                <td><?php echo $row['expgory'];?></td>
                                <td><?php echo $row['paytm'];?></td>
                                <td><span class="status"><?php echo $row['expamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>DAILY EXPENSES</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT expdate, SUM(expamount) AS expamount FROM expenses GROUP BY expdate DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
                                 <td><h4><?php echo $row['expdate'];?><br><span class="status">GHc<?php echo $row['expamount'];?></span></h4></td>
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(expamount) AS sum FROM expenses";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHS '.number_format($row['sum']);

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            <!--</td>
                             <tr>
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




            <div class="details">
             <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>RECENT TITHES</h2>
                            <!--<a href="" class="btn">Overview</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>MEMBER ID</td>
                                <td>NAME</td>
                                <td>DATE</td>
                                <td>MONTH</td> 
                                <td>CONTACT</td>
                                <td>AMOUNT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT * FROM indietithes ORDER BY id DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['memberno'];?></td>
                                <td><?php echo $row['fullname'];?></td>
                                <td><?php echo $row['titdate'];?></td>
                                <td><?php echo $row['titmonth'];?></td>
                                <td><?php echo $row['contact'];?></td>
                                <td><span class="status"><?php echo $row['titamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>DAILY TITHES</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT titdate, SUM(titamount) AS titamount FROM indietithes GROUP BY titdate DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
                                 <td><h4><?php echo $row['titdate'];?><br><span class="status">GHc<?php echo $row['titamount'];?></span></h4></td>
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(titamount) AS sum FROM indietithes";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHS '.number_format($row['sum']);

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            <!--</td>
                             <tr>
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







             <div class="details">
             <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>RECENT PROCUREMENTS</h2>
                        <!--<a href="" class="btn">Overview</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Name</td>
                                <td>Quantity</td>
                                <td>Vendor</td>
                                <td>Purpose</td>
                                <td>Receiver</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT prodate, proname, quantity, vendor, purpose, proamount, receiver FROM procurement ORDER BY proid DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['prodate'];?></td>
                                <td><?php echo $row['proname'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['vendor'];?></td>
                                <td><?php echo $row['purpose'];?></td>
                                <td><?php echo $row['receiver'];?></td>
                                <td><span class="status"><?php echo $row['proamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>



                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>DAILY PROCUREMENTS</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT prodate, SUM(proamount) AS proamount FROM procurement GROUP BY prodate DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
                                 <td><h4><?php echo $row['prodate'];?><br><span class="status">GHc<?php echo $row['proamount'];?></span></h4></td>
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(proamount) AS sum FROM procurement";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHS '.number_format($row['sum']);

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            <!--</td>
                             <tr>
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


           








             <div class="details">
                <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Monetary</h2>
                         <!--<a href="" class="cbtn">Chart</a>-->
                        </div>
                        <div id="chart-container">
                            <canvas id="mycanvas"></canvas>
                            <?php require 'finchart.php' ?>
                        </div>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Gender</h2>
                            <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container2">
                            <canvas id="mycanvas2"></canvas>
                            <?php require 'finchart.php' ?>
                        </div>
                    </div>
             </div>
                



            <div class="details">
             <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>NET INCOME</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                        <thead>
                            <tr>
                                <td>MONTH</td>
                                <td>REVENUE</td>
                                <td>EXPENSES</td>
                                <td>DIFFERENCE</td>
                            </tr>
                        </thead>
                        <tbody>


                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='January') AS January,(SELECT SUM(expamount) FROM `expenses` WHERE expmonth='February') AS February,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='March') AS march,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='April') AS April,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='May') AS May,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='June') AS June,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='July') AS July,  (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='August') AS August, (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='September') AS September, (SELECT SUM(expamount) FROM `expenses` WHERE expmonth='October') AS October,(SELECT SUM(expamount) FROM `expenses` WHERE expmonth='November') AS November,(SELECT SUM(expamount) FROM `expenses` WHERE expmonth='December') AS December,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='January') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='January') AS TJanuary,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='February') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='February') AS TFebruary,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='March') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='March') AS TMarch,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='April') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='April') AS TApril,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='May') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='May') AS TMay,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='June') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='June') AS TJune,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='July') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='July') AS TJuly,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='August') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='August') AS TAugust,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='September') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='September') AS TSeptember,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='October') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='October') AS TOctober,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='November') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='November') AS TNovember,
                                (SELECT SUM(ofamount) FROM `offerings` WHERE offmonth='December') + (SELECT SUM(titamount) FROM `tithes` WHERE titmonth='December') AS TDecember";
                            
                            $result = $conn-> query($sql);

                           
                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td>JANUARY</td>
                                <td><span><?php echo'GHS '. number_format($row['TJanuary']);?></span></td>
                                <td><span><?php echo'GHS '. number_format($row['January']);?></span></td>
                                <td><?php

                                $TJanuary = $row['TJanuary'];
                                $January = $row['January'];
                                $diff = $row['TJanuary'] - $row['January'];

                                 $TJanuary - $January = $diff;
                                 echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>FEBRUARY</td>
                                <td><span><?php echo 'GHS '. number_format($row['TFebruary']);?></span></td>
                                <td><span><?php echo 'GHS '. number_format($row['February']);?></span></td>
                                <td><?php

                                $TFebruary = $row['TFebruary'];
                                $February = $row['February'];
                                $diff = $row['TFebruary'] - $row['February'];

                                $TFebruary - $February = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>MARCH</td>
                                <td><span><?php echo 'GHS '.number_format($row['TMarch']);?></span></td>
                                <td><span><?php echo 'GHS '.number_format($row['march']);?></span></td>
                                <td><?php

                                $TMarch = $row['TMarch'];
                                $March = $row['march'];
                                $diff = $row['TMarch'] - $row['march'];

                                $TMarch - $March = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>APRIL</td>
                                <td><span><?php echo $row['TApril'];?></span></td>
                                <td><span><?php echo $row['April'];?></span></td>
                                <td><?php

                                $TApril = $row['TApril'];
                                $April = $row['April'];
                                $diff = $row['TApril'] - $row['April'];

                                $TApril - $April = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>MAY</td>
                                <td><span><?php echo $row['TMay'];?></span></td>
                                <td><span><?php echo $row['May'];?></span></td>
                                <td><?php

                                $TMay = $row['TMay'];
                                $May = $row['May'];
                                $diff = $row['TMay'] - $row['May'];

                                $TMay - $May = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>JUNE</td>
                                <td><span><?php echo $row['TJune'];?></span></td>
                                <td><span><?php echo $row['June'];?></span></td>
                                <td><?php

                                $TJune = $row['TJune'];
                                $June = $row['June'];
                                $diff = $row['TJune'] - $row['June'];

                                $TJune - $June = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>JULY</td>
                                <td><span><?php echo $row['TJuly'];?></span></td>
                                <td><span><?php echo $row['July'];?></span></td>
                                <td><?php

                                $TJuly = $row['TJuly'];
                                $July = $row['July'];
                                $diff = $row['TJuly'] - $row['July'];

                                $TJuly - $July = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>AUGUST</td>
                                <td><span><?php echo $row['TAugust'];?></span></td>
                                <td><span><?php echo $row['August'];?></span></td>
                                <td><?php

                                $TAugust = $row['TAugust'];
                                $August = $row['August'];
                                $diff = $row['TAugust'] - $row['August'];

                                $TAugust - $August = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>SEPTEMBER</td>
                                <td><span><?php echo $row['TSeptember'];?></span></td>
                                <td><span><?php echo $row['September'];?></span></td>
                                <td><?php

                                $TSeptember = $row['TSeptember'];
                                $September = $row['September'];
                                $diff = $row['TSeptember'] - $row['September'];

                                $TSeptember - $September = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>OCTOBER</td>
                                <td><span><?php echo $row['TOctober'];?></span></td>
                                <td><span><?php echo $row['October'];?></span></td>
                                <td><?php

                                $TOctober = $row['TOctober'];
                                $October = $row['October'];
                                $diff = $row['TOctober'] - $row['October'];

                                $TOctober - $October = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>NOVEMBER</td>
                                <td><span><?php echo $row['TNovember'];?></span></td>
                                <td><span><?php echo $row['November'];?></span></td>
                                <td><?php

                                $TNovember = $row['TNovember'];
                                $November = $row['November'];
                                $diff = $row['TNovember'] - $row['November'];

                                $TNovember - $November = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <tr>
                                <td>DECEMBER</td>
                                <td><span><?php echo $row['TDecember'];?></span></td>
                                <td><span><?php echo $row['December'];?></span></td>
                                <td><?php

                                $TDecember = $row['TDecember'];
                                $December = $row['December'];
                                $diff = $row['TDecember'] - $row['December'];

                                $TDecember - $December = $diff;
                                echo 'GHS '.number_format($diff);?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                            }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>





                <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>BOOK OVERVIEW</h2>
                            <!--<a href="" class="btn">Overview</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>BOOK TITLE</td>
                                <td>BOOK QUANTITY</td>
                                <td>RETAIL AMOUNT</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT * FROM books ORDER BY bkid DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['bktitle'];?></td>
                                <td><?php echo $row['bktotal'];?></td>
                                <td><span class="status"><?php echo 'GHS '.number_format($row['retamount']);?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();    
                            ?>              
                        </tbody>
                    </table>
                 </div>

                </div>









             <div class="details">
             <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>BOOK SALES</h2>
                            <!--<a href="" class="btn">Overview</a>-->
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>BOOK TITLE</td>
                                <td>STATUS</td>
                                <td>DATE</td>
                                <td>QUANTITY</td>
                                <td>BOOK TOTAL</td>
                                <td>RETAIL AMOUNT</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT * FROM books ORDER BY bkid DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['bktitle'];?></td>
                                <td><?php echo $row['pubstatus'];?></td>
                                <td><?php echo $row['bkdate'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['bktotal'];?></td>
                                <td><span class="status"><?php echo $row['retamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                 <div class="recentCustomers">
                    <div class="cardHeader">
                         <h2>MONTHLY TITHES</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                     <?php 
                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT titmonth, titamount FROM tithes ORDER BY titid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <!--<td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>-->
                                 <td><h4><?php echo $row['titmonth'];?><br><span class="status">GHc<?php echo $row['titamount'];?></span></h4></td>
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
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                                    $query = "SELECT SUM(titamount) AS sum FROM tithes";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHS '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output;?>
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

            



             <div class="details">
                <div class="recentOrders">
                        <div class="cardHeader">
                                <h2>Cell Offerings</h2>
                                <!--<a href="" class="cbtn">Chart</a>-->
                        </div>
                            <div id="chart-container">
                                <canvas id="mycanvas3"></canvas>
                                <?php require 'finchart.php' ?>
                            </div>
                        
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Tithes</h2>
                            <!--<a href="" class="cbtn">Chart</a>-->
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas4"></canvas>
                            <?php require 'finchart.php' ?>
                        </div>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Expenses</h2>
                            <!--<a href="" class="cbtn">Chart</a>-->
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas5"></canvas>
                            <?php require 'finchart.php' ?>
                        </div>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Offerings</h2>
                            <!--<a href="" class="cbtn">Chart</a>-->
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas6"></canvas>
                            <?php require 'finchart.php' ?>
                        </div>
                    </div>
             </div>
                

             


        </div>
    </div>

    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../jquery/Chart.min.js"></script>
    <script type="text/javascript" src="finchart.js"></script>
    <script type="text/javascript" src="canvas5.js"></script>
    
</body>
     <script src="finboard.js"></script>
</html>