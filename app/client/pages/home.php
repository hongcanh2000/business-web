<div class="container-fluid slider">
    <div class="container-business row banner">
        <?php foreach($result_banner as $each){ ?>
        <div class="banner__info col-7 col-md-8 col-sm-12">
            <div class="banner__info-content">
                <h2><?php echo $each['content']; ?></h2>
            </div>
            <div class="banner__info-title">
                <p><?php echo $each['title']; ?></p>
            </div>
            <div class="banner__info-link header__button btn-green">
                <a href="">Getting Started</a>
            </div>
        </div>
        <div class="banner__card col-5 col-md-4 col-sm-12">
            <div class="banner__card-img">
                <img src="<?php echo $each['img'] ?>" alt="">
                <div class="banner__card-info">
                    <div class="banner__card-title">
                        <p><?php echo $each['img_title'] ?></p>
                    </div>
                    <div class="banner__card-author">
                        <p><?php echo $each['author'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="service__info row">
            <div class="info-content col-lg-6 col-md-6 col-sm-12">
                <h3>We help more than 200+ clients to grow their business</h3>
            </div>
            <div class="service__info-title col-lg-6 col-md-6 col-sm-12">
                <div class="service__info-text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="service__info-btn header__button">
                    <a href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="service__list row">
            <div class="service__item col-lg-3 col-md-6 col-sm-12">
                <div class="service__item-icon bg-green">
                    <i class="fa-solid fa-display icon-green"></i>
                </div>
                <div class="service__item-content">
                    <h4>Financial Consulting</h4>
                </div>
                <div class="service__item-title">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. </p>
                </div>
                <div class="service__item-link">
                    <div class="service__item-link-text">
                        <h5>Learn More</h5>
                    </div>
                    <div class="service__item-link-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="service__item col-lg-3 col-md-6 col-sm-12">
                <div class="service__item-icon bg-red">
                    <i class="fa-solid fa-display icon-red"></i>
                </div>
                <div class="service__item-content">
                    <h4>Business Plan</h4>
                </div>
                <div class="service__item-title">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. </p>
                </div>
                <div class="service__item-link">
                    <div class="service__item-link-text">
                        <h5>Learn More</h5>
                    </div>
                    <div class="service__item-link-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="service__item col-lg-3 col-md-6 col-sm-12">
                <div class="service__item-icon bg-orange">
                    <i class="fa-solid fa-display icon-orange"></i>
                </div>
                <div class="service__item-content">
                    <h4>Human Resources</h4>
                </div>
                <div class="service__item-title">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. </p>
                </div>
                <div class="service__item-link">
                    <div class="service__item-link-text">
                        <h5>Learn More</h5>
                    </div>
                    <div class="service__item-link-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="service__item col-lg-3 col-md-6 col-sm-12">
                <div class="service__item-icon bg-blue">
                    <i class="fa-solid fa-display icon-blue"></i>
                </div>
                <div class="service__item-content">
                    <h4>Strategy Business</h4>
                </div>
                <div class="service__item-title">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. </p>
                </div>
                <div class="service__item-link">
                    <div class="service__item-link-text">
                        <h5>Learn More</h5>
                    </div>
                    <div class="service__item-link-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="value__info row">
            <div class="info-content col-lg-7 col-md-12">
                <h3>
                    Build a Business Foundation for Good Initial Planning
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <?php foreach ($result_value as $value){ ?>
        <div class="value__list row">
            <div class="value__item col-lg-5 col-md-6">
                <div class="value__item-img">
                    <img src="<?php echo $value['img']?>" alt="">
                </div>
                <div class="value__item-title">
                    <p><?php echo $value['description']?></p>
                </div>
            </div>
            <div class="value__item col-lg-1 value__item-space">
            </div>
            <div class="value__item col-lg-6 col-md-6 value__item-reserve">
                <div class="value__item-title mt-0">
                    <p><?php echo $value['description']?></p>
                </div>
                <div class="value__item-img">
                    <img src="<?php echo $value['img']?>" alt="">
                </div>
            </div>
            <div class="value-btn service__info-btn header__button">
                <a href="">Learn More</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="container-fuild clients">
    <div class="container">
        <div class="container-business p-0">
            <div class="clients__info">
                <div class="info-content">
                    <h3>
                        Our clients
                    </h3>
                </div>
                <div class="clients__list">
                    <?php foreach($result_client as $each){?>
                        <div class="clients__item">
                            <img src="<?php echo $each['img']?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="container-business">
        <div class="review__info">
            <div class="info-content">
                <h3>What Our Customer says</h3>
            </div>
            <div class="review__info-title row">
                <div class="review__info-text col-lg-6 col-md-6 col-sm-12">
                    <p>I am very helped in making a website and business development that makes the product that I have to have a quality for use by the user</p>
                </div>
                <div class="btn__arrow col-lg-6 col-md-6 col-sm-12">
                    <div class="btn__arrow-item btn__arrow-left">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="btn__arrow-item btn__arrow-right">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="review__list row">
                <?php foreach ($result_review as $each){ ?>
                <div class="review__item col-lg-6 col-md-6 col-sm-12">
                    <div class="review__item-title">
                        <p><?php echo $each['description']; ?></p>
                    </div>
                    <div class="review__item-user">
                        <img src="<?php echo $each['img']; ?>" alt="">
                        <div class="review__item-user-info">
                            <h5><?php echo $each['name']; ?></h5>
                            <small><?php echo $each['address']; ?></small>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="team">
            <div class="team__info row">
                <div class="info-content col-6">
                    <h3>Our Team</h3>
                </div>
                <div class="btn__arrow col-6">
                    <div class="btn__arrow-item btn__arrow-left">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="btn__arrow-item btn__arrow-right">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="team__list row">
                <?php foreach($result_team as $each) { ?>
                    <div class="team__list-item col-lg-4 col-md-6 col-sm-12">
                        <div class="team__item">
                            <div class="team__item-img">
                                <img src="<?php echo $each['img']; ?>" alt="">
                            </div>
                            <div class="team__item-user">
                                <h4><?php echo $each['name']; ?></h4>
                                <p><?php echo $each['position']; ?></p>
                                <div class="team__item-user-contact">
                                    <div class="team__item-contact">
                                        <i class="fa-solid fa-envelope icon-contact"></i>
                                        <p><?php echo $each['email']; ?></p>
                                    </div>
                                    <div class="team__item-contact">
                                        <i class="fa-solid fa-phone icon-contact"></i>
                                        <p><?php echo $each['phone']; ?></p>
                                    </div>
                                </div>
                                <div class="social__media-list">
                                    <div class="social__media-item">
                                        <a href="">Dr</a>
                                    </div>
                                    <div class="social__media-item">
                                        <a href="">Be</a>
                                    </div>
                                    <div class="social__media-item">
                                        <a href="">Li</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>