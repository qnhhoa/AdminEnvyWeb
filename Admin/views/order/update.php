   
        <div class="container">
            <div class="row">
            <div class="module span9 offset0">
                    <form class="form-vertical" action="index.php?controller=order/edit&act=edit&id=<?php echo $value["MaHD"] ?>" method="post" enctype="multipart/form-data">
                        <div class="module-head">
                            <h3>Update Order</h3>
                        </div>
                        <div class="module-option clearfix">
                            <div class="media-body">
                                <table cellpadding="5" style="width: 100%">
                                    <tr>
                                        <td width="10%">Order ID</td>
                                        <td width="100%">
                                            <input type="text" class="span3" name="MaHD" value="<?php echo $value["MaHD"] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Username</td>
                                        <td width="100%">
                                            <input type="text" class="span3" name="Username" value="<?php echo $value["Username"] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Fullname</td>
                                        <td width="50%">
                                            <div class="input-append">
                                                <input type="datetime" class="span3" name="Fullname" value="<?php echo $value["Fullname"] ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Receive by</td>
                                        <td width="100%">
                                            <input type="datetime" class="span3" name="NgayNH" value="<?php echo $value["NgayNH"] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Status</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <select class="span3" type="text" name="Trangthai">
                                                    <option><?php echo $value["Trangthai"] ?></option>
                                                    <option>Pickup</option>
                                                    <option>On process</option>
                                                    <option>On delivery</option>
                                                    <option>Delivered</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Address</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <input class="span5" type="text" name="Address" value="<?php echo $value["Address"] ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Phone number</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <input class="span5" type="text" name="PhoneNumber" value="<?php echo $value["PhoneNumber"] ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Subtotal</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <input class="span5" type="text" name="TongTien" value="<?php echo $value["TongTien"] ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Payment</td>
                                        <td width="100%">
                                            <div class="input-prepend">
                                                <select class="span5" type="text" name="Method">
                                                    <option><?php echo $value["Method"] ?></option>
                                                    <option>Cash on delivery</option>
                                                    <option>Momo wallet</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <center>
                                <input type="submit" class="btn btn-success" value="Update" style="margin-top: 10px;"> &nbsp;
                                <a href="index.php?controller=order/list" class="btn btn-info" style="margin-top: 10px;">Back</a>                   
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
