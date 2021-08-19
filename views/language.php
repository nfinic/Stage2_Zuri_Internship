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
            <!-- <div class="col-md-12">
                <h3 class="text-center">Personal Information</h3>
            </div> -->
        
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
                        </div> 
                    </div>
                    <div class="col-md-6  col-lg-6">
                        <div class="form-control">
                            <input type="text" name="maritalStatus" class="form-control" id="maritalStatus" placeholder="Marital Status" data-rule="minlen:1" />
                            <br>
                            
                        </div>
                    </div>
                
                </div>
                <br>
                
                <div class="row">
                    <div class="lass="col-md-12">
                        <div class="text-center" ><button type="submit" name="language" class="btn btn-info">Save</button></div>
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