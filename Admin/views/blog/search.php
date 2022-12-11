<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Blog</h3>
            </div>
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display" width="100%">
                <div class="module-option clearfix">
                    <form action="index.php?controller=blog/search&act=search" method="post" enctype="multipart/form-data">
                    <div class="input-append pull-left">
                                <input type="search" class="span3" name="search" placeholder="Search here">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                                <a href="index.php?controller=blog/list" class="btn btn-info" >Back</a>
                        </div>
                    </form>
                    <form>
                        <div class="input-append pull-right">
                        <a href="index.php?controller=blog/add" class="btn btn-success" type="submit">Add +</a>                            <br>
                            <br>
                            <button name="btn" class="btn btn-success" type="submit">Filters</button>
                        </div>
                    </form>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Photo</th>
                            <th>Content</th>
                            <th>Link post</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <?php 
                        $stt=0;
                        foreach ($data as $row) {
                            $stt++;
                    ?>
                    <tbody>
                        <td><?php echo $row["ID"]; ?></td>
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["author"] ?></td>
                        <td><img src="<?php echo $row["photo"]?>"></td>
                        <td><?php echo $row["content"]; ?></td>
                        <td><?php echo $row["link_post"]; ?></td>
                        <td>
                        <a href="index.php?controller=blog/edit&id=<?php echo $row["ID"] ?>">View</a>                                          
                            <br>
                        <a href="index.php?controller=blog/list&act=delete&id=<?php echo $row['ID'] ?>">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                <?php } ?>
                </div>
            </table>
        </div>
    </div>
</div>
