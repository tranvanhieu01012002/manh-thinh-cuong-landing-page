
<div class="virtual-class"></div>
<?php

if(isset($_GET['search'])){?>
<?php $search = $_GET['search']; ?>
	<div class="content">
	<div class="content-oject">
	<?php
            $database = new dph();
            $row = $database->get_list('select * from project where Description LIKE "%'.$search.'%"  or Description LIKE "%'.$search.'%" or district LIKE "%'.$search.'%" or construc_type LIKE "%'.$search.'%" or outstanding	 LIKE "%'.$search.'%" ;') ?>
            <div class="virtual-class"></div>
			<?php foreach ($row as $value) : ?>
			<figure class="effect-bubba">
			<img src="./Admin/upload/<?php echo $value['img']?>" alt="img02"/>
					<figcaption>
						<h5><?php echo $value['Description']?></h5>
						<a href="./Du-An.php?id=<?php echo $value['id_project'] ?>">
							<div style="padding: 0px 0px;" class="btn-root">
								Xem thêm
								<span></span>
							</div>
						</a>
					</figcaption>			 
		    </figure>
    <?php endforeach ?>
	</div>
</div>
<div class="virtual-class"></div>
<?php
} elseif(isset($_POST['search_house'])){?>
	<?php $search_house = $_POST['search_house']; 

	
	$type_bulding = "Nhà ở"; 
	$year = "2022"; 
	$district ="Sơn Trà"; 
	if(isset( $_POST['type'])){
		$type_bulding = $_POST['type'];
	}
	if(isset( $_POST['year'])){
		$year = $_POST['year'];
	}
	if(isset($_POST['district'])){
		$district = $_POST['district']; 
	}
	$min = $_POST['min-value'];
	$max = $_POST['max-value'];

	?>
		<div class="content">
		<div class="virtual-class"></div>
		<div class="virtual-class"></div>
		<div class="content-oject">
		<?php
				$database = new dph();
				$row = $database->get_list('select * from project where construc_type LIKE "%'.$type_bulding.'%"  and delivery LIKE "%'.$year.'%" and district LIKE "%'.$district.'%" and total_cons_area between "'.$min.'" and "'.$max.'" ;') ?>
				<div class="virtual-class"></div>
				<div class="virtual-class"></div>
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
	} else {?> 
	<div class="content-l">
	<div class="content-oject">
	<?php
            $database = new dph();
            $row = $database->get_list('select * from project;') ?>
			<div class="virtual-class"></div>
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
<?php

