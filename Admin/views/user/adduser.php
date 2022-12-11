
<div class="container">
    <div class="row">
    <div class="module span9 offset0">
        <form class="form-vertical" action="index.php?controller=user/add&act=add" method="post" enctype="multipart/form-data">
            <div class="module-head">
                <h3>Add User</h3>
            </div>
            <div class="module-option clearfix">
                <div class="media-body">
                    <table cellpadding="3" style="width: 100%">
                        <tr>
                            <td width="10%">Username</td>
                            <td width="100%">
                                <input type="text" name="Username" class="span3" required>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">Fullname </td>
                            <td width="50%">
                                <div class="input-append">
                                    <input type="text" name="HoTen" class="span3" required>
                                </div>
                            </td>
                        </tr>                      
                        <tr>
                        <td width="10%">Pass</td>
                            <td width="100%">
                                <input type="text" name="password" class="span3" required>
                            </td>                          
                        </tr>
                        <tr>
                            <td width="10%">Phone number</td>
                            <td width="100%">
                                <div class="input-prepend">
                                    <input class="span5" name ="SDT" type="text" required>       
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">Address</td>
                            <td width="100%">
                                <div class="input-prepend">
                                    <input class="span7" name ="DiaChi" type="text" required>       
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <select name="cRole" class="span1" style="margin-top: 10px; padding: 3px;">
                                    <option value="0">0</option>
                                    <option value="1">1</option>                                   
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td width="10%">Email</td>
                            <td width="100%">
                                <input type="email" name="Email" class="span5" placeholder="envy@gmail.com">
                            </td>
                        </tr>    
                    </table>
                    <center>
                        <input type="submit" class="btn btn-success" value="Add" style="margin-top: 10px;"> &nbsp;
                        <a href="index.php?controller=user/list" class="btn btn-info" style="margin-top: 10px;">Back</a></center>                   
                </div>
            </div>
        </form>       
    </div>
</div>
</div>
