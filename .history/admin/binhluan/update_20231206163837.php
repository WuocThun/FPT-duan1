<?php
     session_start();
    extract ($_SESSION['userdn']);
    extract($binhluan);
?>
<div class="row container_dm">
    <style>
    .container_dm {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .text_dm {
        width: 100%;
        text-align: center;
    }

    .btn_container_dm {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .formcontent {
        width: 50% !important;
    }

    .form_dm {
        width: 100%;
        margin: auto;
    }

    .imgpath {
        width: 100px;
        height: 70;

    }
    </style>
    <div class="row frmtitle">
        <h1>Cập nhật danh mục</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=updatebl" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Nội dung<br>
                <input type="text" name="comment" value="<?=$comment?>">
            </div>
            <div class="row mb10 text_dm">
                idpro<br>
                <input type="text" name="idpro" value="<?=$idpro?>">
            </div>
            <div class="row mb10 text_dm">
                iduser<br>
                <select name="iduser">
                        <?php
                              foreach ($nameiduser as $nameid) {
                                extract($nameid);
                                echo '
                            <option value="'.$iduser.'">'.$iduser.'</option>
                                ';
                            }
                        ?>


                </select>
                <!-- <select name="iduser">
                        <?php
                        foreach ($listtk as $TK) {
                            extract($TK);
                            // if ($idpro== $user)
                            echo '
                        <option value="'.$user.'">'.$user.'</option>
                            ';
                        }
                        ?> 
                </select> -->
                <input type="text" name="iduser" value="<?=$iduser?>">
            </div>
            <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
            <input type="submit" class="btn_dm" name="capnhat" value="Cập nhật">
            <a class="btn_dm" href="index.php?act=dsbl">
                <input class="btn_dm" type="button" value="Danh Sách"></a>
        </form>
    </div>
</div>
</div>