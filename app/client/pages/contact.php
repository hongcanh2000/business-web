<div class="container-fluid banner__blog">
    <div class="container-business">
        <div class="banner__info">
            <h2>Hello, Get in Touch with us!</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="form__message">
            <form action="" id="form-ms" class="row">
                <div class="your__message col-lg-12 col-sm-12 ">
                    <label for="" class="your__message-label">Your Message</label>
                    <input name="" class="your__message-input">
                </div>
                <div class="row form-user">

                    <div class="col-lg-4 col-md-12 info__user col-sm-12">
                        <label for="" class="info__user-label">Full Name</label>
                        <input type="text" class="info__user-input">
                    </div>
                    <div class="col-lg-4 col-md-12 info-user">
                        <label for="" class="info__user-label">Your Email</label>
                        <input type="text" class="info__user-input">
                    </div>
                    <div class="col-lg-4 col-md-12 info-user">
                        <label for="" class="info__user-label">Subject</label>
                        <input type="text" class="info__user-input">
                    </div>
                </div>
                <button class="btn-send-message">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-business">
        <div class="tab">
            <ul class="tab__list">
                <li class="tab__list-item tab-active">
                    Los Angeles
                </li>
                <li class="tab__list-item">
                    New York
                </li>
                <li class="tab__list-item">
                    Houston
                </li>
                <li class="tab__list-item">
                    Washington
                </li>
            </ul>
        </div>

        <div class="contact__info-list row">
            <?php foreach($result_contact as $each){ ?>
                <div class="contact__info-item col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact__info-img">
                            <img src="<?php echo $each['img'] ?>" alt="">
                        </div>
                        <div class="contact__info-address">
                            <div class="contact__info-address-item">
                                <i class="fa-solid fa-location-dot contact-icon"></i>
                                <p><?php echo $each['address'] ?></p>
                            </div>
                            <div class="contact__info-address-item">
                                <i class="fa-solid fa-phone contact-icon"></i>
                                <p><?php echo $each['phone'] ?></p>
                            </div>
                            <div class="contact__info-address-item contact-gmail">
                                <i class="fa-solid fa-envelope contact-icon"></i>
                                <p><?php echo $each['email'] ?></p>
                            </div>
                            <div class="contact__info-link service__item-link">
                                <div class="service__item-link-text">
                                    <h5>See on Map</h5>
                                </div>
                                <div class="service__item-link-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>