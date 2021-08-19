<!doctype html>
<html lang="en">
    <head>        
        <title> Dashboard</title>
        <?php
        require_once '../views/includes/headHtml.php';
        ?>
    </head>    
    <body>
    <a href="./home.php"><img src="../views/images/logo.png" alt="" title="" /></img></a>

    <div class="container">
        
        <div class="row">
        
            <form action="./registerPersonalDetails.php" method="POST">
                <div class="col-md-12">
                    <h3 class="text-center">Personal Information</h3>
                </div>
                <div class="row">
                
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="fistName" class="form-control" id="fistName" placeholder="First name" data-rule="minlen:1" />
                            <br>
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last name" data-rule="minlen:1" />
                            <br>
                            <input type="text" name="middleName" class="form-control" id="middleName" placeholder="Middle name" data-rule="minlen:1" />
                            <br>
                            <div>
                                <select id="sexe" name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female<option>
                                </select> 
                            </div>   
                            <br>
                            <div class="date" data-provide="datepicker">
                                <input type="date" class="form-control" name="birthDate" id="datepicker" data-rule="minlen:1" placeholder="Date " />
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="maritalStatus" class="form-control" id="maritalStatus" placeholder="Marital Status" data-rule="minlen:1" />
                            <br>
                            <input type="text" name="country" class="form-control" id="country" placeholder="Country" data-rule="minlen:1" />
                            <br>
                            <input type="text" name="state" class="form-control" id="state" placeholder="State" data-rule="minlen:1" />
                            <br>
                            <input type="text" name="city" class="form-control" id="city" placeholder="City " data-rule="minlen:1" />
                        </div>
                    </div>
                
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Language</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="languagedes" class="form-control" id="languagedes" placeholder="Langauge" data-rule="minlen:1" />
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="languagelevel" class="form-control" id="languagelevel" placeholder="Level" data-rule="minlen:1" />
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Skills</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="skill" class="form-control" id="skill" placeholder="Skill" data-rule="minlen:1" />
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="skillLevel" class="form-control" id="skillLevel" placeholder="Level" data-rule="minlen:1" />
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Education</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                        <textarea rows="4" class="form-control" name="degree" id="degree" placeholder="Degree obtained" data-rule="minlen:1"></textarea>
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="degreeYear" class="form-control" id="degreeYear" placeholder="Year of completion" data-rule="minlen:1" />
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Certification</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                        <textarea rows="4" class="form-control" name="certification" id="certification" placeholder="Certification obtained" data-rule="minlen:1"></textarea>
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="certificationYear" class="form-control" id="certificationYear" placeholder="Year of completion" data-rule="minlen:1" />
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Experience</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                        <textarea rows="7" class="form-control" name="experience" id="experience" placeholder="Experience" data-rule="minlen:1"></textarea>
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Year of start</label>
                                <div class="date" data-provide="datepicker">
                                    <input type="date" class="form-control" name="startDate" id="datepicker" data-rule="minlen:1" placeholder="Date " />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Year of end</label>
                                <div class="date" data-provide="datepicker">
                                    <input type="date" class="form-control" name="endDate" id="datepicker" data-rule="minlen:1" placeholder="Date " />
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="lass="col-md-12">
                        <div class="text-center" ><button type="submit" name="personalDetails" class="btn btn-info">Save</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <?php
        require_once '../views/includes/footHtml.php';
        ?>
    </body>
</html>