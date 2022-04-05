<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<div class="back">
    <div class="content">
    <?php
        $database = new dph();
        $row = $database -> get_row('select * from slides where id = '.$id.' ;')
        ?>
        <div id="tit">
            <h1><?php echo $row['Description'] ?></h1>
        </div>
        <div id="tit"><img src="https://khudothivanphuc.giaodienbds.com/wp-content/uploads/2017/12/bullet_bg.png"
                alt=""></div>
        <div id="dis">
            <p><?php echo $row['Description_detail']?></p>            
        </div>
   
    </div>
</div>
<div class="select-img">
    <button class="btn-img">20/1/2022</button>
    <button class="btn-img">20/2/2022</button>
    <button class="btn-img">20/3/2022</button>
    <button class="btn-img">20/4/2022</button>
    <button class="btn-img">20/5/2022</button>
</div>
<<<<<<< HEAD
<div class="tab-wrap">
    <div class="select-img">

    <?php
        $ro = $database -> get_row('select * from timeline where id = '.$id.' ;');
    ?>
       
        <input type="radio" name="img-check" id="btn-1">
        <label id="lb1" for="btn-1"><?php echo $ro['Timeline_1']?></label>
 
 
        <input type="radio" name="img-check" id="btn-2">
        <label id="lb2" for="btn-2"><?php echo $ro['Timeline_2']?></label>
 
 
        <input type="radio" name="img-check" id="btn-3">
        <label id="lb3" for="btn-3"><?php echo $ro['Timeline_3']?></label>
 
 
        <input type="radio" name="img-check" id="btn-4">
        <label id="lb4" for="btn-4"><?php echo $ro['Timeline_4']?></label>
 
 
        <input type="radio" name="img-check" id="btn-5">
        <label id="lb5" for="btn-5"><?php echo $ro['Timeline_5']?></label>


    </div>
    <div class="display-img">
    <?php
        $img = $database -> get_row('select * from timeline_image where id = '.$id.' ;');
    ?>
        <img id="imgg1" src="./Admin/img/<?php echo $img['img_1']?>" alt="" class="sub-img">
        <img id="imgg2" src="./Admin/img/<?php echo $img['img_2']?>" alt="" class="sub-img">
        <img id="imgg3" src="./Admin/img/<?php echo $img['img_3']?>" alt="" class="sub-img">
        <img id="imgg4" src="./Admin/img/<?php echo $img['img_4']?>" alt="" class="sub-img">
        <img id="imgg5" src="./Admin/img/<?php echo $img['img_5']?>" alt="" class="sub-img">
        <img id="main"  src="https://smarthome.worldtech.vn/wp-content/uploads/2017/10/download-hinh-ngoi-nha-1024x684.jpg" alt="">

=======
<div class="display-small-slide">
    <div class="slider-img">
        <input checked type="radio" name="s" style="background-image: url('https://picsum.photos/500/300?random=1');"
            title="Random Picture 1">
        <input type="radio" name="s" style="background-image: url('https://picsum.photos/500/300?random=2');"
            title="Random Picture 2">
        <input type="radio" name="s" style="background-image: url('https://picsum.photos/500/300?random=3');"
            title="Random Picture 3">
        <input type="radio" name="s" style="background-image: url('https://picsum.photos/500/300?random=4');"
            title="Random Picture 4">
        <input type="radio" name="s" style="background-image: url('https://picsum.photos/500/300?random=5');"
            title="Random Picture 5">
    </div>
    <div class="text-monthly-des">
        <h3>Nhà đẹp</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, aliquid expedita magnam sequi eligendi
            distinctio eveniet dicta harum cumque unde quo cupiditate iste molestias ex ducimus nam temporibus voluptas
            atque! Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Vero eos aperiam magni temporibus excepturi exercitationem cumque dolorem libero commodi?
            Quidem alias officia doloremque, quisquam culpa animi enim commodi qui nesciunt! Sit nam eum nemo ad
            mollitia fugit autem recusandae
            perspiciatis, officia eius saepe fugiat quas voluptatem sequi cumque iste suscipit ea earum ipsa aliquam
            possimus? Voluptatem quo adipisci eius esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero
            eos aperiam magni temporibus
            excepturi exercitationem cumque dolorem libero commodi? Quidem alias officia doloremque, quisquam culpa
            animi enim commodi qui nesciunt! Sit nam eum nemo ad mollitia fugit autem recusandae perspiciatis, officia
            eius saepe fugiat quas voluptatem
            sequi cumque iste suscipit ea earum ipsa aliquam possimus? Voluptatem quo adipisci eius esse! Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Vero eos aperiam magni temporibus excepturi exercitationem
            cumque dolorem libero commodi?
        </p>
>>>>>>> 9cd227ebc2129707f17037b28469afc93d0b9d57
    </div>
</div>