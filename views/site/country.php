<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
$url = new yii\helpers\Url();
?>
<div class="container">
    <div class="row">
    Our Country
    </div>
</div>

<br />
<div class="row">
    <div class="col-lg-12">
            <h4 class="heading">Recent Works</h4>
            <div class="row">
                    <section id="projects">
                    <ul id="thumbs" class="portfolio">
                            <!-- Item Project and Filter Name -->
                            <li class="col-lg-3 design" data-id="id-0" data-type="web">
                            <div class="item-thumbs">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1" href="img/works/1.jpg">
                            <span class="overlay-img"></span>
                            <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="<?= $url->base(true)?>/img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </div>
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 2" href="img/works/2.jpg">
                            <span class="overlay-img"></span>
                            <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="<?= $url->base(true)?>/img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="img/works/3.jpg">
                            <span class="overlay-img"></span>
                            <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="<?= $url->base(true)?>/img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="img/works/4.jpg">
                            <span class="overlay-img"></span>
                            <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="<?= $url->base(true)?>/img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                    </ul>
                    </section>
            </div>
    </div>
</div>