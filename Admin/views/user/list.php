<div class="span9">
<div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Users</h3>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display" width="100%">
                    <div class="module-option clearfix">
                        <form action="index.php?controller=user/search&act=search" method="post" enctype="multipart/form-data">
                            <div class="input-append pull-left">
                                <input type="search" class="span3" name="search" placeholder="Search here">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="input-append pull-right">
                                 <a href="index.php?controller=user/add" class="btn btn-success" type="submit">Add user +</a>
                            </div>
                            <br>
                            <br>
                            <div class="dropdown pull-right">
                                <button class="dropbtn">Filter</button>
                                <div class="dropdown-content">
                                    <a href="?controller=user&action=list">Order by name</a>
                                    <a href="?controller=user&action=list">Order by role</a>
                                </div>
                            </div>  
                            </div>            
                        </form>
                    </div>
                    <thead>
                        <tr>
                            <th>User name</th>
                            <th>Full name</th>
                            <th>Password</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Manage</th>
                    </thead>
                    <?php 
                        $stt=0;
                        foreach ($data as $row) {
                            $stt++;
                    ?>
                    <tbody>
                        <td><?php echo $row["Username"]; ?></td>
                        <td><?php echo $row["HoTen"] ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["SDT"]; ?></td>
                        <td><?php echo $row["DiaChi"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td><?php echo $row["cRole"]; ?></td>
                        <td>
                        <a href="index.php?controller=user/edit&id=<?php echo $row["Username"] ?>">View</a>                                          
                            <br>
                        <a href="index.php?controller=user/list&act=delete&id=<?php echo $row['Username'] ?>">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
</div>
<ul class="paginate">
<div class="pull-right">        
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=user/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</div>
</ul>
</div>

