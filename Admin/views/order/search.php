<div class="span9">
    <div class="content">                         
            <div class="module">
                <div class="module-head">
                    <h3>All Order</h3>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display" width="100%">
                    <div class="module-option clearfix">
                    <form action="index.php?controller=order/search&act=search" method="post" enctype="multipart/form-data">
                            <div class="input-append pull-left">
                                <input type="search" class="span3" name="search" placeholder="Search here">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                                <a href="index.php?controller=order/list" class="btn btn-info">Back</a>
                            </div>
                        </form>
                        <form>
                            <div class="input-append pull-right">
                                <button name="btn" class="btn btn-success" type="submit">Filter </button>
                            </div>
                        </form>
                    </div>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Username</th>
                            <th>Created Date</th>
                            <th>Receive by</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>Subtotal</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Manage</th>
                        </tr>
                    </thead>													
                    <?php 
                            $stt=0;
                            foreach ($data as $row) {
                                $stt++;
                        ?>
                        <tbody>
                            <td><?php echo $row["MaHD"]; ?></td>
                            <td><?php echo $row["Username"] ?></td>
                            <td><?php echo $row["NgayHD"]; ?></td>
                            <td><?php echo $row["NgayNH"]; ?></td>
                            <td><?php echo $row["TenSP"]; ?></td>
                            <td><?php echo $row["SL"]; ?></td>
                            <td><?php echo $row["Address"]; ?></td>
                            <td><?php echo $row["PhoneNumber"]; ?></td>
                            <td><?php echo $row["TongTien"]; ?></td>
                            <td><?php echo $row["Method"]; ?></td>
                            <td><?php echo $row["Trangthai"]; ?></td>
                            <td>
                            <a href="index.php?controller=order/edit&id=<?php echo $row["MaHD"] ?>">View</a>                                          
                                <br>
                            <a href="index.php?controller=order/list&act=delete&id=<?php echo $row['MaHD'] ?>">Delete</a>
                            </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>