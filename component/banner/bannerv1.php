<style>
  #bannerslideshow {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
  }

  .carousel-item {
    height: 399px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards;
  }

  .carousel-inner {
    border-radius: 8px;
    overflow: hidden;
  }

  .carousel-indicators {
    bottom: 10px;
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }
</style>

<div id="bannerslideshow" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#bannerslideshow" data-slide-to="0" class="active"></li>
    <li data-target="#bannerslideshow" data-slide-to="1"></li>
    <li data-target="#bannerslideshow" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active card border-dark mb-3" style="background-image: url('component/banner/6B4A1235.jpg');"></div>
    <div class="carousel-item card border-primary mb-3" style="background-image: url('component/banner/IMG-20240207-WA0049.jpg');"></div>
    <div class="carousel-item card border-secondary mb-3" style="background-image: url('component/banner/IMG_20230828_193748_554.jpg');"></div>
  </div>
</div>

<script>
  $('.carousel').carousel({
    interval: 5000
  });
</script>
