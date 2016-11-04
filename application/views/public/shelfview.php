<?php include 'include/header.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?= base_url('assets/images/1.png'); ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?= base_url('assets/images/3.png'); ?>" alt="Flower">
    </div>

    <div class="item">
      <img src="<?= base_url('assets/images/5.png'); ?>" alt="Flower">
    </div>

    <div class="item">
      <img src="<?= base_url('assets/images/6.jpg'); ?>" alt="Flower">
    </div>

    <div class="item">
      <img src="<?= base_url('assets/images/44.jpg'); ?>" alt="Flower">
    </div>

    <div class="item">
      <img src="<?= base_url('assets/images/7.jpg'); ?>" alt="Flower">
    </div>
  </div>

  
</div>

<div class="row container" style="margin: auto; padding: 0;">
	<div class="col-lg-3" style="border:1px solid red;"></div>
	<div class="col-lg-9" style="height: 150px; padding: 0;">
		<?php foreach ($shelfitems as $items): 
		?>
		<div class="row container-fluid">
			<div class="col-lg-3" style="padding: 0;">
				<a href="">
					<img src="<?=base_url('assets/images/'.$items->image);?>" height="100%" width="100%">
				</a>
			</div>
			<div class="col-lg-6">
				<a href=""><h5 style="font-weight: bold;"><?= $items->name; ?></h5></a>
				<p><?= $items->brand; ?></p>
				<p>From <a href=""><?= $items->brand; ?></a></p>
			</div>
			<div class="col-lg-3">
				<p>Starting at <span style="font-weight:bold;"><?= $items->price; ?></span></p>
				<button class="btn btn-info btn-xs btn-block"> Add to Cart</button>
				<p class="small text-center">in-stock</p>
			</div>
		</div>
		<hr>
		<?php endforeach; ?>
	</div>
	
</div>
<div class="row"></div>
<div class="row"></div>
<?php include 'include/footer.php'; ?>