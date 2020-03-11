<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Store.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Store</title>

<body>

<header>
    <?php include("Header.php") ?>
</header>
<main  class="w3-content" style="max-width:1600px">
    <!--photo start-->
    <div class="w3-main" style="margin-left:100px">
        <div class="w3-display-container w3-container">
            <img src="Images/breakfast-1663295_1920.jpg" alt="Jeans" style="width:100%">
            <div class="w3-display-topleft w3-text-white" style="padding:240px 48px">
                <h1 class="w3-jumbo w3-hide-small">Vegan Store </h1>
                <h1 class="w3-jumbo w3-hide-small">Available Now</h1>
                <h1 class="w3-hide-small">BEST PRODUCTS IN 2020</h1>
                <p><a href="#shop" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
            </div>
        </div>

        <div class="w3-container w3-text-grey" id="jeans">
            <p>16 products available</p>
        </div>
        <!--photo ends-->
        <div id="shop" class="w3-row">

            <div class="w3-col l3 s6">

                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/Cokies.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/dp/B00XMZ6U0Y/ref=as_li_tl?ie=UTF8&linkCode=gs2&linkId=9694157c8faff034f306731e5ee44751&creativeASIN=B00XMZ6U0Y&tag=vegancom-21&creative=9325&camp=1789" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Lenny & Larry's The Complete Cookie Snickerdoodle, 12-Count<br><b>Available Now!</b></p>
                </div>
                <!--        best example so far-->
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/tofu.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/s?k=Mori-Nu+Silken+Tofu%2C+Extra+Firm%2C+12.3+Ounce+%28Case+of+12%29&i=grocery&camp=1789&creative=9325&creativeASIN=B000LKZ86K&linkCode=gs3&linkId=51e64e50e4705ae2873dd2d7c533f37e&tag=vegancom-21&ref=as_li_tl" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Mori-Nu Silken Tofu, Extra Firm, 12.3 Ounce<br><b>Available Now!</b></p>
                </div>
                <!--        end-->
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/choco.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/s?k=Peanut+Butter&i=grocery&camp=1789&creative=9325&creativeASIN=B00FB40PAA&linkCode=gs3&linkId=acbc81897bd8b2339ffb6485f93c7613&tag=vegancom-21&ref=as_li_tl" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Peanut Butter & Co. Dark Chocolatey Dreams<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/soya.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Wholefood-Earth-Organic-Soya-Chunks/dp/B01L2IS4GK/ref=sr_1_fkmr0_1?camp=1789&creative=9325&creativeASIN=B008EMAF0G&keywords=Butler+Soy+Curls%2C+8+oz.+Bags+%28Pack+of+6%29&linkCode=gs3&linkId=a02f9e35e541fa1db03afc851f11922e&qid=1583582065&s=grocery&sr=1-1-fkmr0" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Wholefood Earth Organic Soya Chunks, 1 kg<br><b>Available Now!</b></p>
                </div>
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/dark._SX425_.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/dp/B00GDIMCPY/ref=as_li_tl?ie=UTF8&linkCode=gs2&linkId=6942c645dd6cf13a8fa20e088c11a092&creativeASIN=B00GDIMCPY&tag=vegancom-21&creative=9325&camp=1789" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Green & Black’s Organic Dark Chocolate, 85% Cacao<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/seed.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/s?k=Nutiva+Organic%2C+Premium+Black+Chia+Seeds%2C+32-ounce&i=grocery&camp=1789&creative=9325&creativeASIN=B00AQFGL3O&linkCode=gs3&linkId=d707bb8747f97c157fce7fec56eca737&tag=vegancom-21&ref=as_li_tl" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Nutiva Organic, Premium Black Chia Seeds<br><b>Available Now!</b></p>
                </div>
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/potato.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/s?k=Tasty+Bite+Indian+Entree+Channa+Masala+10+Ounce+%28Pack+of+6%29%2C+Fully+Cooked+Indian+Entr%EF%BF%BDe+with+Chickpeas+Onions+Tomatoes&i=grocery&camp=1789&creative=9325&creativeASIN=B002JF61XO&linkCode=gs3&linkId=fe6c6334b40d958a852aae8c7dedcf94&tag=vegancom-21&ref=as_li_tl" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Tasty Bite Indian Entree Channa Masala 10 Ounce (Pack of 6)<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/bar.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/dp/B007I6RVHY/ref=as_li_tl?ie=UTF8&linkCode=gs2&linkId=46e72895c13e55c3150fa7d76ddd6a4e&creativeASIN=B007I6RVHY&tag=vegancom-21&creative=9325&camp=1789" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>PROBAR – Meal Bar, Oatmeal Chocolate Chip<br><b>Available Now!</b></p>
                </div>
            </div>
            <div class="w3-col l3 s6">

                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/lux.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/LUXStore-Menstrual-Absorbent-Neutralises-Hypoallergenic/dp/B07P1P51D6/ref=sr_1_52?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583580588&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-52" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>LUXStore Organic Menstrual Pads with Wide Wings Super Absorbent,<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/tampons.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Natracare-Organic-Cotton-Tampons-Applicator/dp/B00005368P/ref=sr_1_68?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583580803&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-68" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Natracare Organic All Cotton Tampons With Applicator - Regular 16<br><b>Available Now!</b></p>
                </div>
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/woowoo.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Intimate-Feminine-Cleansing-Soothing-Biodegradable/dp/B07J5CKKPM/ref=sr_1_73?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583580803&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-73" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Intimate Wipes for Women Feminine Hygiene Cleansing Soothing PH Balanced Biodegradable<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/tesa.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/tesa-Packaging-Recycled-Materials-Packing/dp/B0024NKDE4/ref=sr_1_99?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583581125&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-99" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Tesa Paper Packaging Tape Made From Recycled Materials for Packing Parcels <br><b>Available Now!</b></p>
                </div>
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/panda.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Cheeky-Panda-Percent-Bamboo-Dinner/dp/B07BF1PD9S/ref=sr_1_102?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583581294&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-102" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>The Cheeky Panda 100 Percent Bamboo Dinner Napkin, 50 Count<br><b>Available Now!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/Nature-Safe-Plant-Food.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Nature-Safe-Plant-Feed-Brown/dp/B0852RS5RM/ref=sr_1_153?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583581424&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-153" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Nature Safe Plant Feed 10kg, Brown<br><b>Available Now!</b></p>
                </div>
            </div>

            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/straw_.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Straws-Panda-Environmentally-Biodegradable-Eco-Friendly/dp/B07GZ1RTZR/ref=sr_1_236?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583581674&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-236" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Bamboo Straws | Panda Straws | Reusable Natural Drinking Straws | <br><b>Available Now in Amazon!</b></p>
                </div>
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="img/cork.jpg" style="width:300px;height:200px">
                        <span class="w3-tag w3-display-topleft">New</span>
                        <div class="w3-display-middle w3-display-hover">
                            <a href="https://www.amazon.co.uk/Sanding-Rounded-Holder-Sandpaper-Abrasive/dp/B071J9DC1N/ref=sr_1_264?crid=16XPRKO6C3VOZ&keywords=vegan+products&qid=1583581850&s=industrial&sprefix=vegan+prod%2Cindustrial%2C152&sr=1-264" target="_blank"><button  class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
                        </div>
                    </div>
                    <p>Cork Sanding Block with Rounded Edges | Cork Sanding <br><b>Available Now!</b></p>
                </div>
            </div>
        </div>
    </div>
</main>
    <?php include("Footer.php") ?>
</body>
</html>
