<!--Include Head.html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Coneybeare Sustainability Catalog</title>
    <!-- Insert Favicon -->
    <link href="../images/coneybeare-favicon.png" type="image/png" rel="icon">
</head>
<body>
<!--Include Header.html-->
<div class="container" id="main">
    <!-- Jumbotron -->
    <div class="jumbotron">
        <img src="../images/coneybeare-favicon.png" height="170" width="171"/>
        <h1 class="display-4">Coneybeare Sustainability Catalog</h1>
        <p class="lead">THREE GENERATIONS OF SUCCESSFUL ENTREPRENEURS</p>
    </div>

</div>
<!--Start Nav-->
<div class="mainContainer">
    <ul class="nav nav-tabs flex-column flex-sm-row">
        <li id="menu-item-home" class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
        <li id="menu-item-about" class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li id="menu-item-signup" class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
    </ul>
</div>

<br>

<!--4 Explanatory text-->
<div>
    <p>Please complete the form to be included in the Sustainability Catalog.</p>
</div>

<!-- Form -->
<form action="confirm.php" method="post" id="orgForm" enctype="multipart/form-data">

    <!-- Organization Name -->
    <fieldset class="form-group border p-2">
        <legend>Organization Info</legend>

        <div class="row">
            <div class="col">
                <!-- Company Name -->
                <div class="form-group">
                    <label for="oname" class="oInfo">Organization Name *</label>
                    <input type="text" class="form-control" placeholder="Organization name" id="oname" name="oname">
                    <span class="err" id="err-oname">Please enter an organization name</span>
                </div>
            </div>
            <div class="col">
                <!-- Website Name -->
                <div class="form-group">
                    <label for="website" class="oInfo">Website *</label>
                    <input type="text" class="form-control" placeholder="website.com" id="website" name="website">
                    <span class="err" id="err-website">Please enter an website</span>
                </div>
            </div>
        </div>

        <!--4 - Add an about tab that, when filled, prompts for a tagline of 250 characters or less-->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="about">Enter the tagline you wish to see in the sustainability catalog. (Character Limit: 250)</label>
                    <textarea class="form-control" rows="4" id="about" name="about"></textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <!-- Category -->
                <div class="form-group">
                    <label for="category" class="oInfo">Category *</label>
                    <select id="category" name="category" class="form-control">
                        <option value="none">Select a category</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="circular_economy">Circular Economy</option>
                        <option value="clothing">Clothing</option>
                        <option value="consumer_goods">Consumer Goods</option>
                        <option value="ecology">Ecology</option>
                        <option value="education">Education</option>
                        <option value="energy">Energy</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="housing">Housing</option>
                        <option value="lighting">Lighting</option>
                        <option value="manufacturing">Manufacturing</option>
                        <option value="transportation">Transportation</option>
                        <option value="wastewater">Wastewater</option>
                        <option value="water">Water</option>
                    </select>
                    <span class="err" id="err-category">Please enter an category</span>
                </div>
            </div>
            <div class="col">
                <!-- Email -->
                <div class="form-group">
                    <label for="cemail" class="oInfo">Company Email *</label>
                    <input type="text" class="form-control" placeholder="companyemailhere@email.com" id="cemail" name="cemail">
                    <span class="err" id="err-cemail">Please enter an email</span>
                </div>
            </div>
        </div>
    </fieldset>

    <!--
    <fieldset class="form-group border p-2">
        <legend>Screaming</legend>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <label for="test" class="oInfo">Test Field</label>
                    <input type="text" class="form-control" placeholder="test" id="test" name="test">
                </div>
            </div>
        </div>
    </fieldset>
    -->

    <br>
    <!-- Location -->
    <fieldset class="form-group border p-2">
        <legend>Location</legend>
        <!--
        Address fields
        <div class="form-group">
            <div class="col">
                <label for="inputAddress" class="form-label">Address *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                <span class="err" id="err-address">Please enter an address</span>
            </div>
            <div class="col">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
        </div>
        -->
        <div class="form-group form-inline">
            <div class="col">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">State *</label>
                <select id="inputState" class="form-select" name="inputState">
                    <option selected="">Choose...</option>
                    <option>...</option>
                </select>
                <span class="err" id="err-state">Please enter a state</span>
            </div>
            <div class="col">
                <label for="inputCountry" class="form-label">Country</label>
                <input type="text" class="form-control" id="inputCountry" name="inputCountry">
            </div>
            <div class="col">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label for="areaServed" class="form-label">Area Served</label>
                <select id="areaServed" class="form-control" name="areaServed">
                    <option value="localRegional">Local/Regional</option>
                    <option value="state">State</option>
                    <option value="national">National</option>
                    <option value="global">Global</option>
                </select>
            </div>
        </div>
        <!--Geographical area served (local/regional, state, national, global)-->
    </fieldset>

    <br>
    <!-- Contact Info -->
    <fieldset class="form-group border p-2">
        <legend>Contact Info</legend>
        <p>This person will be contacted regarding questions about their submission</p>
        <div class="row">
            <div class="col">
                <!-- First Name -->
                <div class="form-group">
                    <label for="fname" class="cInfo">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname">
                </div>
            </div>
            <div class="col">
                <!-- Last Name -->
                <div class="form-group">
                    <label for="lname" class="cInfo">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname">
                </div>
            </div>
            <!--
            <div class="col">
                 Phone Number
                <div class="form-group">
                    <label for="phone" class="cInfo" >Enter a phone number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="123-456-789">
                </div>
                -->
                <!--pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
            </div>
            -->
            <div class="col">
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="cInfo">Email</label>
                    <input type="text" class="form-control" placeholder="personalemailhere@email.com" id="email" name="email">
                </div>
            </div>
        </div>
    </fieldset>

    <br>

    <fieldset class="form-group border p-2">
        <legend>Logo</legend>
        <div class="row">
            <div class="form-group">
                <label for="imgUpload" class="cInfo">Upload an image of your logo</label>
                <input type="file" value="Upload Image" class="form-control" id="imgUpload" name="imgUpload">
            </div>
        </div>
    </fieldset>

    <br>

    <!-- Check and submit buttons -->
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!--When successfully submitted, have an alert thanking them
    Submitting sends them to a page which has organized info-->
    <!--Email function for successful form-->

</form>

<!--4 - When form is complete, have a section to upload a logo image-->

<!--Include Footer.html-->

<!-- Start of Conybear Footer -->
<div class="conyFooter">
    <div class="mainContainer">
        <div class="footerSubMenu-1">
            <div class="execphpwidget">
                <img src="http://www.coneybeare.com/wp-content/themes/coneybeare/images/img-6.png" alt="image">
                <p>Coneybeare is a woman-owned staffing firm that has been successful in California since 1986. Coneybeare's namesake.</p>
                <a href="http://www.coneybeare.com/about-us" title="readmore">Read more</a>

            </div>
        </div>
        <div class="footerSubMenu-2">
            <h3>LATEST POSTS</h3>
            <div class="latestPost">
                <img src="http://www.coneybeare.com/wp-content/themes/coneybeare/images/img-7.png">

                <p><strong>03.27.2016</strong><br>His first charge come</p>
                <br class="spacer">
            </div>
            <div class="latestPost">
                <img src="http://www.coneybeare.com/wp-content/themes/coneybeare/images/img-7.png">

                <p><strong>11.03.2009</strong><br>Vicky has used her ar</p>
                <br class="spacer">
            </div>

            <a href="http://www.coneybeare.com/blog" title="readmore">Read more</a>
        </div>


        <div class="footerSubMenu-3">
            <h3>Contact info</h3>
            <ul>

                <div class="textwidget"> <li class="footerIcon-1">Southern California Office<br>
                    2003 North Broadway
                    Santa Ana, CA 92706</li>

                    <li class="footerIcon-3">E/contact@coneybeare.com <br>
                        P/ 714-547-8546 <br>
                        F/ 714-834-1848</li></div>
            </ul>
        </div>
        <div class="footerSubMenu-4">
            <h3>Quick Contact</h3>
            <div class="form">
                <div role="form" class="wpcf7" id="wpcf7-f64-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/#wpcf7-f64-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="64">
                            <input type="hidden" name="_wpcf7_version" value="4.4.2">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f64-o1">
                            <input type="hidden" name="_wpnonce" value="8d40ba730f">
                        </div>
                        <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full name(required)"></span><br>
                            <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email address(required)"></span><br>
                            <span class="wpcf7-form-control-wrap comment"><textarea name="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Comment"></textarea></span><br>
                            <input type="submit" value="submit" class="wpcf7-form-control wpcf7-submit submitBtn"></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>	 </div>
        </div>
        <br class="spacer">
    </div>

</div>

<!-- End:Footer -->
<!-- Start:Footer bottom -->

<div class="footerBottom">
    <div class="mainContainer">
        <p>Copyright © 2021 CONEYBEARE, LLC and LEAN IS GREEN. All rights reserved</p>
    </div>
</div>

<!-- End:Footer bottom -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../scripts/scripts.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

</body></html>