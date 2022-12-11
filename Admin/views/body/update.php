
        <div class="container">
            <div class="row">
                <div class="module span9 offset0">
                <form class="form-vertical" action="index.php?controller=body/edit&act=edit&id=<?php echo $value["SpID"] ?>" method="post" enctype="multipart/form-data">
                        <div class="module-head">
                            <h3>Add BodyCare Product</h3>
                        </div>
                        <div class="module-option clearfix">
                            <div class="media-body">
                                <table cellpadding="3" style="width: 100%">
                                    <tr>
                                        <td width="10%">Product ID </td>
                                        <td width="100%">
                                            <input type="text" name="SpID" class="span3" value="<?php echo $value["SpID"] ?>" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">Product Name </td>
                                        <td width="100%">
                                            <input type="text" name="TenSP" class="span3" value="<?php echo $value["TenSP"] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Cost</td>
                                        <td width="100%">
                                            <input type="text" name="GiaSP" class="span7" value="<?php echo $value["GiaSP"] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product type</td>
                                        <td>
                                            <select name="MaLSP" style="margin-top: 10px; padding: 3px;">
                                            <option value="<?php echo $value["MaLSP"]; ?>"><?php echo $value["TenLSP"]; ?></option>
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
                                        <option value="<?php echo $value["BrandID"]; ?>"><?php echo $value["TenNcc"]; ?></option>
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
                                                <input class="span1" name="SL" type="text" value="<?php echo $value["SL"]; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <span>Description</span>
                                        <br>
                                        <div class="row-fluid">
                                            <textarea class="span12" name="MoTa" style="height: 150px; resize: none;"><?php echo $value["MoTa"]; ?></textarea>
                                        </div>

                                    </tr>   
                                    <?php
                                    $decoded_json = json_decode($value["Photo"], false);
                                    ?>
                                    <tr>
                                        <td width="10%">Photo</td>
                                        <td width="100%">
                                            <input type="file" name="image">
                                            <?php if(isset($decoded_json->PhotoMain) && $decoded_json->PhotoMain!=""){ ?>
                                            <img src="<?php echo $decoded_json->PhotoMain;  ?>"alt="" width="25%">
                                            <?php } ?>
                                        </td>
                                    </tr>                                     
                                </table>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Update" style="margin-top: 10px;"> &nbsp;
                                    <a href="index.php?controller=body/list" class="btn btn-info" style="margin-top: 10px;">Back</a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
