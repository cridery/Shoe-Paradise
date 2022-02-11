<div class="container">
    <img class="icon" src="../images/design/nike_logo.png" alt="nike logo">
    <!-- Slideris(Women, Men, etc...) -->
    <div class="store-content-slider-buttons">
        <button class="content-slider-button" onclick="storeDiv(1)">Women</button>
        <button class="content-slider-button" onclick="storeDiv(2)">Men</button>
        <button class="content-slider-button" onclick="storeDiv(3)">Kids</button>
        <button class="content-slider-button" onclick="storeDiv(4)">Collections</button>
    </div>
    <!-- Moteru skiltis -->
    <div class="store-content">
        <div class="flex-container">
            <div class="wmns-buttons">
                <button class="demo" onclick="currentDiv(1)">1</button>
                <button class="demo" onclick="currentDiv(2)">2</button>
                <button class="demo" onclick="currentDiv(3)">3</button>
            </div>
            <div class="women-first">
                <div class="flex-container">
                    <div class="wmns-first-text">
                        <h2>Nike Air <br>Jordan 1</h2>
                        <p>The Air Jordan 1 High Bred Patent features black and red patent leather upper with
                            signature
                            weaved
                            Nike Air tongue labels. From there, a classic Wings logo on the collar and a white
                            with
                            red
                            Air sole complete the retro design.
                        </p>
                        <div class="add-button">
                            <button class="air-jordan-add">Add to Bag</button>
                            <p>&euro;119<p>
                        </div>
                    </div>
                    <div class="store-intro-shoe">
                        <img src="../images/store/first_shoe/jordan_red_side.png">
                    </div>
                </div>
                <div class="wmns-shoes-lightbox">
                    <div class="wmns-row">
                        <div class="wmns-column">
                            <img src="../images/store/first_shoe/jordan_red_back.png" style="width: 100%"
                                onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="wmns-column">
                            <img src="../images/store/first_shoe/jordan_red_front.png" style="width: 100%"
                                onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="wmns-column">
                            <img src="../images/store/first_shoe/jordan_red_side.png" style="width: 100%"
                                onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div id="myModal" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">

                                <div class="mySlides">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="../images/store/first_shoe/jordan_red_back.png" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="../images/store/first_shoe/jordan_red_front.png" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 3</div>
                                    <img src="../images/store/first_shoe/jordan_red_side.png" style="width:100%">
                                </div>

                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="wmns-column">
                                    <img class="wmns-demo cursor" src="../images/store/first_shoe/jordan_red_back.png"
                                        style="width:100%" onclick="currentSlide(1)" alt="Back of Air Jordan Shoe">
                                </div>

                                <div class="wmns-column">
                                    <img class="wmns-demo cursor" src="../images/store/first_shoe/jordan_red_front.png"
                                        style="width:100%" onclick="currentSlide(2)" alt="Front of Air Jordan 1 Shoe">
                                </div>
                                <div class="wmns-column">
                                    <img class="wmns-demo cursor" src="../images/store/first_shoe/jordan_red_side.png"
                                        style="width:100%" onclick="currentSlide(3)" alt="Side of Air Jordan 1 Red">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="women-first">
                <div class="flex-container">
                    <div class="wmns-second-text">
                        <h2>Nike Air Max Pre-Day</h2>
                        <p>Taking the classic look of heritage Nike Running into a new realm,
                            the Nike Air Max Pre-Day brings you a fast-paced look that's ready for today's world.
                            A true nod to the past with a design made from at least 20% recycled material by weight.
                        </p>
                        <div class="add-button">
                            <button class="air-jordan-add">Add to Bag</button>
                            <p>&euro;109<p>
                        </div>
                    </div>
                    <div class="store-second-shoe">
                        <img src="../images/store/second_shoe/air-max-side.png">
                    </div>
                </div>
            </div>
            <div class="women-first">
                <div class="flex-container">
                    <div class="wmns-third-text">
                        <h2>Yeezy 350 v2</h2>
                        <p>From a constructional standpoint, they feature an elastic upper comprised of the
                            Three
                            Stripes'
                            signature Primeknit material, while its bottom regions are comprised with rib-like
                            molds
                            that
                            house its interior Boost midsole cushioning. Some of its earlier iterations were
                            decorated with “SPLY-350”
                            text hits on its traditional stripe, but variations in recent years have instead
                            opted
                            to keep things to a cleaner aesthetic.
                        </p>
                        <div class="add-button">
                            <button class="air-jordan-add">Add to Bag</button>
                            <p>&euro;200<p>
                        </div>
                    </div>
                    <div class="store-third-shoe">
                        <img src="../images/store/third_shoe/yeezy.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vyrai -->
    <div class="store-content">
        <p> Vyru pvz. </p>
    </div>
    <div class="store-content">
        <p> Kids </p>
    </div>
    <div class="store-content">
        <p> Collections </p>
    </div>
    <div id="articles"></div>
</div>