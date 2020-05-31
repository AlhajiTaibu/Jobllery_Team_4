<?php include "includes/dashboard_header.php";?>
    <div id="wrapper">
<?php include "includes/dashboard_navigation.php";?>
            <div class="container-fluid profile">
                <div class="profile-container">
                    <h3 class="header"><strong>Profile</strong></h3>
                    <form>
                        <div class="form-row">
                            <div class="col-md-6 offset-md-0" id="forms">
                                <div class="form-group"><label>First Name</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Address</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Phone Number</label><input class="form-control" type="tel"></div>
                                <div class="form-group"><label>Experience</label><input class="form-control" type="text"></div>
                            </div>
                            <div class="col-md-6 offset-md-0" id="forms">
                                <div class="form-group"><label>Last Name</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Date of Birth</label><input class="form-control" type="date"></div>
                                <div class="form-group"><label>Job Title</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label for="gender">Gender<select class="form-control"><option value="">Male</option><option value="">Female</option><option value="">Other</option></select></label></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="heading-style"><strong>Profile Image</strong></h4>
                            <div class="form-row" id="form-adjust">
                                <div class="col">
                                    <div class="form-group"><input type="file"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="heading-style"><strong>Qualifications</strong></h4>
                            <div class="form-row" id="form-adjust">
                                <div class="col">
                                    <div class="form-group"><select class="form-control"><option value="undefined" selected="">Select your highest level of education</option><option value="">Doctoral Degree</option><option value="">Masters Degree</option><option value="">Bachelor's Degree</option><option value="">High School Certificate</option></select></div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="heading-style"><strong>Description</strong></h4>
                            <div class="form-row" id="form-adjust">
                                <div class="col">
                                    <div class="form-group"><textarea class="form-control"></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="heading-style"><strong>Documents URL</strong></h4>
                            <div class="form-row" id="form-adjust">
                                <div class="col">
                                    <div class="form-group"><input class="form-control" type="url"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="heading-style"><strong>Tags</strong></h4>
                            <div class="form-row" id="form-adjust">
                                <div class="col-4 offset-0">
                                    <div class="form-group"><input class="form-control" type="text" placeholder="eg. PHP, Developer, CSS"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="forms">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><button class="btn btn-primary" id="button" type="submit">Save Profile</button></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     <?php include "includes/dashboard_footer.php";?>