<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $database = new dph();
    $row = $database->get_row('select * from project where id_project = ' . $id . ' ;');
    $rowTimeLine = $database->get_row('select * from timeline where id = ' . $id . ' ;');
?>

<div class="back">
    <img class="imgback"
        src="https://khudothivanphuc.giaodienbds.com/wp-content/uploads/2017/12/van-phuc-slide-3-1-1.jpg" alt="">
    <div class="content">
        <div class="title">
            <h1><?php echo $row['Description'] ?></h1>
        </div>
        <div class="display-project-info">
            <table id="<?php if(isset($_GET['id'])) echo $id ?>"  class="info-project">
                <tbody>
                    <tr>
                        <td>
                            Tên dự án
                        </td>
                        <td>
                            <?php echo $row["name_project"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mã dự án
                        </td>
                        <td>
                        <?php echo $row["project_code"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Diện tích
                        </td>
                        <td>
                        <?php echo $row["land_area"] ?>
                        m<sup>2</sup>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Tổng diện tích xây dựng
                        </td>
                        <td>
                        <?php echo $row["total_cons_area"] ?> 
                        m<sup>2</sup>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Tên khách hàng
                        </td>
                        <td>
                        <?php echo $row["name_cus"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Địa chỉ
                        </td>
                        <td>
                        <?php echo $row["address"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Quận
                        </td>
                        <td>
                        <?php echo $row["district"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Loại xây dựng
                        </td>
                        <td>
                        <?php echo $row["construc_type"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Ngày bắt đầu
                        </td>
                        <td>
                        <?php echo $row["start"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Ngày bàn giao
                        </td>
                        <td>
                        <?php echo $row["delivery"] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="hr-style">
            </div>
            <div class="description">
                <h3>Mô tả dự án</h3>
                <?php
                echo $row['Description_detail']
                ?>
            </div>
        </div>
        <div class="decoration"><img
                src="https://khudothivanphuc.giaodienbds.com/wp-content/uploads/2017/12/bullet_bg.png" alt=""></div>
    </div>
</div>
<div class="select-img ">
    <?php
    $i = -1;
    foreach ($rowTimeLine as $ele) {
        $i++;
        if ($i == 0) {
            continue;
        }
        echo '<button value="'.$i.'" class="btn-root">' . $ele . '<span></span></button>';
    }
    ?>
</div>

<div class="display-small-slide">
    <div class="content-detail-text-slider">
        <div class="slider-img">
            <?php
            $img = $database->get_row('select * from timeline_image where id = ' . $id . ' ;');
            ?>
            <input checked type="radio" name="s" style="background-image: url(./Admin/upload/<?php echo $img['img_1'] ?>);">
            <input type="radio" name="s" style="object-fit: cover; background-image: url('./Admin/upload/<?php echo $img['img_2'] ?>');">
            <input type="radio" name="s" style="object-fit: cover; background-image: url('./Admin/upload/<?php echo $img['img_3'] ?>');">
            <input type="radio" name="s" style="object-fit: cover; background-image: url('./Admin/upload/<?php echo $img['img_4'] ?>');">
            <input type="radio" name="s" style="object-fit: cover; background-image: url('./Admin/upload/<?php echo $img['img_5'] ?>');">
        </div>
        <div class="text-monthly-des">
            <h4><?php echo $row['Description'] ?></h4>
            <p><?php echo $row['Description_detail'] ?>
            </p>
            
        </div>
    </div>
</div>

<!--  Dự án tương tự -->
<br><br>
<div class="page-container-slider">
    <div class="name-project">
        <div>
            <h2><?php $district = $row["district"];
            echo $district;
            ?></h2>
        </div>
    </div>
    <div class="container-pr">

        <div class="container-slider">
            <?php
            $database = new dph();
            $district__home = $database->get_list('select * from project where district= "'.$district.'";') ?>
            <?php foreach ($district__home as $value) : ?>

            <div class="box-slider">
                <a href="./Du-An.php?id=<?php echo $value['id_project'] ?>">
                    <div class="slide-img">
                        <img src="./Admin/upload/<?php echo $value['img'] ?>" alt="">
                    </div>
                    <div class="detail-box"><?php echo $value['Description'] ?></div>
                </a>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</div>