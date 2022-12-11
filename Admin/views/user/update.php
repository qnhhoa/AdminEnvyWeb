
<div class="container">
    <div class="row">
    <div class="module span9 offset0">
        <form class="form-vertical" action="index.php?controller=user/edit&act=edit&id=<?php echo $value["Username"] ?>" method="post" enctype="multipart/form-data">
            <div class="module-head">
                <h3>Update User</h3>
            </div>
            <div class="module-option clearfix">
                <div class="media-body">
                    <table cellpadding="3" style="width: 100%">
                        <tr>
                            <td width="10%">Userame</td>
                            <td width="100%">
                                <input type="text" name="Username" class="span2" value="<?php echo $value["Username"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">Fullname </td>
                            <td width="50%">
                                <div class="input-append">
                                    <input type="text" name="HoTen" class="span2" value="<?php echo $value["HoTen"] ?>">
                                </div>
                            </td>
                        </tr>                      
                        <tr>
                        <td width="10%">Pass</td>
                            <td width="100%">
                                <input type="text" name="password" class="span2" value="<?php echo $value["password"] ?>">
                            </td>                          
                        </tr>
                        <tr>
                            <td width="10%">Phone number</td>
                            <td width="100%">
                                <div class="input-prepend">
                                    <input class="span2" name ="SDT" type="text" value="<?php echo $value["SDT"] ?>">       
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <span>Address</span> 
                            <br>
                            <div class="row-fluid">
                                <textarea class="span12" name="DiaChi" style="height: 100px; resize: none;"><?php echo $value["DiaChi"] ?></textarea>
                            </div>                        
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <select name="cRole" class="span1" style="margin-top: 10px; padding: 3px;">
                                    <option><?php echo $value["cRole"] ?></option>
                                    <option>0</option>
                                    <option>1</option>                                   
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td width="10%">Email</td>
                            <td width="100%">
                                <input type="text" name="Email" class="span2" value="<?php echo $value["Email"] ?>">
                            </td>
                        </tr> 
                    </table>
                    <center>
                        <input type="submit" class="btn btn-success" value="Update" style="margin-top: 10px;"> &nbsp;
                        <a href="index.php?controller=user/list" class="btn btn-info" style="margin-top: 10px;">Back</a></center>                   
                </div>
            </div>
        </form>       
    </div>
</div>
</div>
