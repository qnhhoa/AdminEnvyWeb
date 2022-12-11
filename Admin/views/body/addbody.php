  
        <div class="container">
            <div class="row">
                <div class="module span9 offset0">
                <form class="form-vertical" action="index.php?controller=body/add&act=add" method="post" enctype="multipart/form-data">
                        <div class="module-head">
                            <h3>Add BodyCare Product</h3>
                        </div>
                        <div class="module-option clearfix">
                            <div class="media-body">
                                <table cellpadding="3" style="width: 100%">
                                    <tr>
                                        <td width="10%">Product Name </td>
                                        <td width="100%">
                                            <input type="text" name="TenSP" class="span3" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">Photo</td>
                                        <td width="100%">
                                            <input type="file" name="Photo">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Cost</td>
                                        <td width="100%">
                                            <input type="text" name="GiaSP" class="span7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product type</td>
                                        <td>
                                            <select name="MaLSP" style="margin-top: 10px; padding: 3px;">
                                            <?php                                           
                                            foreach ($data1 as $row) {                                             
                                        ?>                                          
                                            <option value="<?php echo $row["MaLSP"]; ?>"><?php echo $row["TenLSP"]; ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>                                   
                                        <select name="BrandID" style="margin-top: 10px; padding: 3px;">;  
                                        <?php                                           
                                            foreach ($data as $row) {                                             
                                        ?>                                          
                                            <option value="<?php echo $row["BrandID"]; ?>"><?php echo $row["TenNcc"]; ?></option>
                                            <?php } ?>
                                        </select>                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Quantity</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <input class="span1" name="SL" type="text" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <span>Description</span>
                                        <br>
                                        <div class="row-fluid">
                                            <textarea class="span12" name="MoTa" style="height: 100px; resize: none;"></textarea>
                                        </div>

                                    </tr>                                    
                                </table>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Insert" style="margin-top: 10px;"> &nbsp;
                                    <a href="index.php?controller=body/list" class="btn btn-info" style="margin-top: 10px;">Back</a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
