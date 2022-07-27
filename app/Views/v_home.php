<?= $this->extend('template-frontend') ?>
<?= $this->section('content'); ?>
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Carousel</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100 h-100" src="ppdb/p1.jpg" alt="First slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100 h-100"" src=" ppdb/p3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 h-100"" src=" ppdb/p2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-left"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-right"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<?= $this->endSection(); ?>