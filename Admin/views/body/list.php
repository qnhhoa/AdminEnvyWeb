<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>All products</h3>
            </div>
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display" width="100%">
                <div class="module-option clearfix">
                <form action="index.php?controller=body/search&act=search" method="post" enctype="multipart/form-data">
                            <div class="input-append pull-left">
                                <input type="search" class="span3" name="search" placeholder="Search here">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            <br>
                        </div>
                    </form>
                    <form>
                        <div class="input-append pull-right">
                        <a href="index.php?controller=body/add" class="btn btn-success" type="submit">Add +</a>
                            <br>
                            <br>
                            <button name="btn" class="btn btn-success" type="submit">Filters</button>
                        </div>
                    </form>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product name</th>
                            <th>Photo</th>
                            <th>Product type</th>
                            <th>Brand</th>
                            <th>Cost</th>
                            <th>Description</th>
                            <th>Quantify</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <?php 
                        $stt=0;
                        foreach ($data as $row) {
                            $stt++;
                        $decoded_json = json_decode($row["Photo"], false);
                    ?>
                    <tbody>
                        <td><?php echo $row["SpID"]; ?></td>
                        <td><?php echo $row["TenSP"] ?></td>
                        <td><img src="<?php echo $decoded_json->PhotoMain; ?>"></td>
                        <td><?php echo $row["TenLSP"]; ?></td>
                        <td><?php echo $row["TenNcc"]; ?></td>
                        <td><?php echo $row["GiaSP"]; ?></td>
                        <td><?php echo $row["MoTa"]; ?></td>
                        <td><?php echo $row["SL"]; ?></td>
                        <td>
                        <a href="index.php?controller=body/edit&id=<?php echo $row["SpID"] ?>">View</a>                                          
                            <br>
                        <a href="index.php?controller=body/list&act=delete&id=<?php echo $row['SpID'] ?>">Delete</a>
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
		<li><a href="index.php?controller=body/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</div>
</ul>
</div>
