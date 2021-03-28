<?php
include_once 'dbh/dbh.php';


$sql0 = "SELECT * FROM pricereviewdb.product;";

$result0 = mysqli_query($conn, $sql0); 
                                $resultCheck0 = mysqli_num_rows($result0);
                                $counter0 = 0;
                                $data0 = array();
                                    if ($resultCheck0>0) {
                                        while($row0 = mysqli_fetch_assoc($result0)){
                                        $data0[$counter0] = $row0;
                                        $counter0 = $counter0 + 1;
                                    }
                                    $item0 = $data0[0];
                                    $item1 = $data0[1];
                                    $item2 = $data0[2];
                                    $item3 = $data0[3];
                                    $item4 = $data0[4]; }

?>
