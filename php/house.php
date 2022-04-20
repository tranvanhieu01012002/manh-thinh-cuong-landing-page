
<?php
if(isset($_GET['search'])){?>
<?php $search = $_GET['search']; ?>
	<div class="content">
	<div class="virtual-class"></div>
	<div class="virtual-class"></div>
	<div class="content-oject">
	<?php
            $database = new dph();
            $row = $database->get_list('select * from project where Description LIKE "%'.$search.'%"  or Description LIKE "%'.$search.'%" or district LIKE "%'.$search.'%" or construc_type LIKE "%'.$search.'%" or outstanding	 LIKE "%'.$search.'%" ;') ?>
            <?php foreach ($row as $value) : ?>
			<figure class="effect-bubba">
			<img src="./Admin/upload/<?php echo $value['img']?>" alt="img02"/>
					<figcaption>
						<h5><?php echo $value['Description']?></h5>
						<a href="./Du-An.php?id=<?php echo $value['id_project'] ?>">
							<div style="padding: 20px 0px;" class="btn-root">
								Xem thêm ne
								<span></span>
							</div>
						</a>
					</figcaption>			 
		    </figure>
    <?php endforeach ?>
	</div>
</div>
<?php
} else {
	?> 
	<div class="content-l">
	<div class="content-oject">
	<?php
            $database = new dph();
            $row = $database->get_list('select * from project;') ?>
            <?php foreach ($row as $value) : ?>
			<figure class="effect-bubba">
			<img src="./Admin/upload/<?php echo $value['img']?>" alt="img02"/>
					<figcaption>
						<h5><?php echo $value['Description']?></h5>
						<div class="btn-root">
							<a href="./Du-An.php?id=<?php echo $value['id_project'] ?>">Xem thêm</a>
							<span></span>
						</div>
					</figcaption>			 
		    </figure>
    <?php endforeach ?>
	</div>
	</div>
	<?php
}?>	
