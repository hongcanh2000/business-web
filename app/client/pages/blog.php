<div class="container-fluid banner__blog">
    <div class="container-business">
        <div class="banner__info">
            <h2>Read the latest News</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="blog__lastest-list row">
            <?php foreach ($result_blog_lastest as $each){ ?>
                <div class="blog__lastest-item col-lg-6 col-md-12 col-sm-6">
                    <div class="blog__lastest-item-img">
                        <img src="<?php echo $each['img'] ?>" alt="">
                        <div class="tag tag-blue">
                            <p>Design</p>
                        </div>
                    </div>
                    <div class="blog__lastest-info">
                        <div class="blog__lastest-content">
                            <h4><?php echo $each['content'] ?></h4>
                        </div>
                        <div class="blog__lastest-title">
                            <p><?php echo $each['title'] ?></p>
                        </div>
                        <div class="service__item-link">
                            <div class="service__item-link-text">
                                <h5>Read More</h5>
                            </div>
                            <div class="service__item-link-icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="blog__list row">
            <?php foreach ($result_blog as $each) { ?>
                <div class="blog__item col-lg-3 col-md-6 col-sm-12">
                    <div class="blog__item-img">
                        <img src="<?php echo $each['img']?>" alt="">
                        <div class="tag tag-blue">
                            <p>Label</p>
                        </div>
                    </div>
                    <div class="blog__item-info">
                        <div class="blog__item-content">
                            <h4><?php echo $each['content']?></h4>
                        </div>
                        <div class="blog__item-title">
                            <p><?php echo $each['title']?></p>
                        </div>
                        <div class="blog__item-link">
                            <div class="blog__item-link-text">
                                <h5>Learn More</h5>
                            </div>
                            <div class="blog__item-link-icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="blog__load">
            <div class="header__button service__info-btn">
                <a href="">Load-more</a>
            </div>
        </div>
    </div>
</div>