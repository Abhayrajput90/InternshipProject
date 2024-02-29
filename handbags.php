<?php require ("header.php")?>

        <div class=" jwel py-5 mt-5">
            <div class="container py-5">
                <h1 style="color: #c3026d;"class=" mb-4 fw-bolder">HANDBAGS COLLECTION</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text"><img src="./Icon/search (1).svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4" >
                                    <label for="jweleries">Default Sorting:</label>
                                    <select id="jweleries" name="jwlist" class="border-0 form-select-sm bg-light me-3" form="jwelwey-form">
                                        <option value="volvo">Relivence</option>
                                        <option value="saab">Popularity</option>
                                        <option value="opel">Top Rated</option>
                                        <option value="audi">Most Sold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Categories</h4>
                                            <ul class="list-unstyled jwel-categorie" >
                                                <li>
                                                    <div class="d-flex justify-content-between jwel-name">
                                                        <a href="#"><i class=""></i>Leather Handbags</a>
                                                        <!-- <span>(3)</span> -->
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between jwel-name">
                                                        <a href="#"><i class=""></i>Design Handbags</a>
                                                        <!-- <span>(5)</span> -->
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between jwel-name">
                                                        <a href="#"><i class=""></i>Formal Handbags</a>
                                                        <!-- <span>(2)</span> -->
                                                    </div>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3" >
                                            <h4 class="mb-2">Price</h4>
                                            <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value" >
                                            <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Additional</h4>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                                <label for="Categories-1"> Popular</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                                <label for="Categories-2"> New design</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                                <label for="Categories-3"> Sales</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                                <label for="Categories-4"> Discount</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="iconstar">
                                            <h4 class="mb-3">Featured products</h4>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="./images/1a.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Design 1</h6>
                                                <div class="d-flex mb-2">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                                    <h5 clas text-decoration-line-through>4.11 $</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="./images/1e.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Design 5</h6>
                                                <div class="d-flex mb-2">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">

                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                                    <h5 clas text-decoration-line-through>4.11 $</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="./images/1h.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Design 8</h6>
                                                <div class="d-flex mb-2">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <img src="./Icon/star-outline.svg" height="15px" alt="">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                                    <h5 class=" text-decoration-line-through">4.11 $</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center my-4">
                                            <a href="#" class="btn border px-4 py-3 rounded-pill w-100">Vew More</a>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1a.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 1</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1b.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 2</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1c.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 3</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1d.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 4</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1e.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border  border-top-0 rounded-bottom">
                                                <h4>Design 5</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1f.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 6</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1g.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 7</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1h.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 8</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative jwel-item">
                                            <div class="jwel-img">
                                                <img src="./images/1i.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                <h4 class="fw-bolder" >Design 9</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <h3 class="text-dark fw-bold mt-1">$4.99</h3>
                                                    <a href="#" class="btn border rounded-pill " style = "font-size :20px;"> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php require ("footer.php")?>