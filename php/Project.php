<div class="page-container-slider">
    <div class="name-project">
        <div>
            <h2>Dự án nổi bật</h2>
        </div>
        <div>
            <img src="https://www.cashadvance6online.com/data/archive/img/2477963118.png" alt="">
        </div>
    </div>
    <div class="container-pr">

        <div class="container-slider">
            <?php
            $database = new dph();
            $row = $database->get_list('select * from project;') ?>
            <?php foreach ($row as $value) : ?>
                <?php if($value['outstanding'] == "yes"){ ?>
                    <div class="box-slider">
                    <a href="./Du-An.php?id=<?php echo $value['id_project'] ?>">
                        <div class="slide-img">
                            <img src="./Admin/upload/<?php echo $value['img'] ?>" alt="">
                        </div>
                        <div class="detail-box"><?php echo $value['Description'] ?></div>
                    </a>
                </div>
            <?php } ?>
          <?php endforeach ?>

        </div>
    </div>
</div>
<div class=" page-container-slider">
    <div class=" name-project ">
        <h2>Căn hộ</h2>
        <img src=" https://www.cashadvance6online.com/data/archive/img/2477963118.png " alt=" ">
    </div>
    <div class="container-pr">
        <div class=" container-slider-home ">
        <?php foreach ($row as $value) : ?>
            <div class=" box-slider ">
                <a href=" ./Du-An.php?id=<?php echo $value['id_project'] ?>" >
                    <div class=" slide-img ">
                        <img src=" ./Admin/upload/<?php echo $value['img'] ?>">
                    </div>
                    <div class=" detail-box ">
                        <div class=" detail-title "><?php echo $value['Description'] ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</div>
<div class="page-container-slider">
    <div class="container-pr">
    <div class=" container-slider-home ">
        <?php foreach ($row as $value) : ?>
            <div class=" box-slider ">
                <a href=" ./Du-An.php?id=<?php echo $value['id_project'] ?>" >
                    <div class=" slide-img ">
                        <img src=" ./Admin/upload/<?php echo $value['img'] ?>">
                    </div>
                    <div class=" detail-box ">
                        <div class=" detail-title "><?php echo $value['Description'] ?></div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
        </div>  
    </div>
  
</div>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "
    integrity="
                            sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="
                            anonymous " referrerpolicy=" no-referrer "></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js "
    integrity="
                            sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="
                            anonymous " referrerpolicy=" no-referrer "></script>
<!-- <script src=" ./model/js/index.js "></script> -->