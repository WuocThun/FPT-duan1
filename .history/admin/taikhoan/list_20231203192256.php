<div class="row ">
            <div class="row frmtitle">
                <H1>Danh Sách Tài khoản</H1>
            </div>
            <div class="row mb10 frmdsloai">
                <form action="index.php?act=listsp" method="post" enctype="multipart/form-data">
                    <input type="text" name="kyw">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);

                                if ($iddm == $id) {
                                    echo '<option value="' . $id . '" selected>' . $namedm . '</option>';
                                } else {
                                    echo '<option value="' . $id . '" >' . $namedm . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <input type="submit" name ="listok" value="Go">  
                </form>
               <table>
                <tr>
                    <th></th>

                    <th>Mã Tài khoản</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Phân quyền</th>
                </tr>
                <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suasp = "index.php?act=suatk&id=".$id;
                        $xoasp = "index.php?act=xoatk&id=".$id;
                        $hinhpath = "../upload/".$imgsp;
                        if(is_file($hinhpath)) {
                            $hinh ="<img src='".$hinhpath."' height='80'>";
                        }else {
                            $hinh = "No photo";
                        }

                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$addr.'</td>
                                <td>'.$role.'</td>
                                <td>
                                    <a href="'.$suatk.'"> <input class="btn-act" type="button" value="Sửa"></a> 
                                    <a href="'.$xoatk.'"><input class="btn-act" type="button" value="xoá"></a>
                                </td>
                                
                            </tr>';
                    }                
                ?>
               
                
               </table>
                </div>
                <div class="row mb10">
                
                </div>
                <div class="row mb20 row_form_btn">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xoá các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            <div class="row formcontent">
            </div>
        </div>