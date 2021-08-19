<!doctype html>
<html lang="en">
    <head>        
        <title> Dashboard</title>
        <?php
        require_once '../views/includes/headHtml.php';
        ?>
    </head>    
    <body>
        <?php
        require_once '../views/includes/headerContent.php';
        ?>
        <div class="container">
        <div class="row">
            <div class="col">
                <h3>Personal Information</h3>
                <?php 
                    echo "Name : ".$user->getFirstName()." ";
                    echo "".$user->getLastName()." ";
                    echo "".$user->getMidleName()." <br/>";
                    echo "Gender : ".$user->getGender()." <br/>";
                    echo "Birth : ".$user->getBirthDate()." <br/>";
                    echo "Marital Status : ".$user->getMaritalStatus()." <br/>";
                    echo "Country : ".$user->getCountry()." <br/>";
                    echo "State : ".$user->getState()." <br/>";
                    echo "City : ".$user->getCity()." <br/>";
                ?>
                <hr class="dropdown-divider">
                <h3>Languages</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Language</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbobdy>
                        <?php 
                            getUserLanguage($user->getId());
                        ?>
                    </tbody>
                </table>
                
                <hr class="dropdown-divider">
                <h3>Skills</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Skill</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbobdy>
                        <?php 
                            getUserSkills($user->getId());
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <h3>Education</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Degree</th>
                            <th scope="col">Year of completion</th>
                        </tr>
                    </thead>
                    <tbobdy>
                        <?php 
                            getUserEducation($user->getId());
                        ?>
                    </tbody>
                </table>
                    <hr class="dropdown-divider">
                <h3>Certifications</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Certifications</th>
                            <th scope="col">Year</th>
                        </tr>
                    </thead>
                    <tbobdy>
                        <?php 
                            getUserCertification($user->getId());
                        ?>
                    </tbody>
                </table>
                    <hr class="dropdown-divider">
                <h3>Experience</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Experience</th>
                            <th scope="col">Year of start</th>
                            <th scope="col">Year of End</th>
                        </tr>
                    </thead>
                    <tbobdy>
                        <?php 
                            getUserExperience($user->getId());
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <?php
        require_once '../views/includes/footHtml.php';
        ?>
    </body>
</html>