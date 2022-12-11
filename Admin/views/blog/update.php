
    <div class="container">
        <div class="row">
            <div class="module span9 offset0">
            <form class="form-vertical" action="index.php?controller=blog/edit&act=edit&id=<?php echo $value["ID"] ?>" method="post" enctype="multipart/form-data">
                    <div class="module-head">
                        <h3>Update Blog</h3>
                    </div>
                    <div class="module-option clearfix">
                        <div class="media-body">
                            <table cellpadding="3" style="width: 100%">
                                <tr>
                                    <td width="10%">ID</td>
                                    <td width="100%">
                                        <input type="text" name="ID" class="span3" value="<?php echo $value["ID"] ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">Title</td>
                                    <td width="100%">
                                        <input type="text" name="title" class="span3" value="<?php echo $value["title"] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">Photo</td>
                                    <td width="100%">
                                        <input type="text" name="photo" class="span2" value="<?php echo $value["photo"] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">Author</td>
                                    <td width="100%">
                                        <input type="text" name="author" class="span2" value="<?php echo $value["author"] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <span>Content</span>
                                    <br>
                                    <div class="row-fluid">
                                        <textarea class="span12" name="content" style="height: 280px; resize: none;"><?php echo $value["content"] ?></textarea>
                                    </div>

                                </tr>
                                <tr>
                                    <td width="10%">Link post</td>
                                    <td width="100%">
                                        <input type="text" name="link_post" class="span2" value="<?php echo $value["link_post"] ?>">
                                    </td>
                                </tr>
                            </table>
                            <center>
                                    <input type="submit" class="btn btn-success" value="Update" style="margin-top: 10px;"> &nbsp;
                                    <a href="index.php?controller=blog/list" class="btn btn-info" style="margin-top: 10px;">Back</a>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
