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
    </div>
</div>