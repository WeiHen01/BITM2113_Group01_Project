<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];
    $orgId = $_GET['org'];
?>

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>
        /* Overlay 11 */
    .overlay {
        position: absolute; 
        top: 80px; 
        width: 100%; 
        height: 153%; 
        background: #171A1F29; /* neutral-900 */
        border-radius: 0px; 
        z-index: -1;
    }
     /* Profile editing form styles */
     .edit-profile-container {
            background-color: white;
            border-radius: 42px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin:  auto;
            padding: 20px;
            position: relative;
        }

        .edit-profile-container h2 {
            margin-top: 0;
            color: #333;
        }

        .edit-profile-container .form-group {
            margin-bottom: 20px;
        }

        .edit-profile-container .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .edit-profile-container .form-group input,
        .edit-profile-container .form-group textarea,
        .edit-profile-container .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .edit-profile-container .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .edit-profile-container .form-group .form-control-inline {
            display: inline-block;
            width: calc(50% - 10px);
        }

        .edit-profile-container .form-group .form-control-inline + .form-control-inline {
            margin-left: 20px;
        }

        .edit-profile-container .form-group .logo-upload {
            display: flex;
            align-items: center;
        }

        .edit-profile-container .form-group .logo-upload img {
            background: #4069E5FF;
            border-radius: 89px;
            width: 100%; 
            height: 177px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .edit-profile-container .form-group .logo-upload button {
            padding: 5px 10px;
        }

        .edit-profile-container .buttons {
            text-align: right;
        }

        .edit-profile-container .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-profile-container .buttons .save-button {
            background-color: #007bff;
            color: white;
        }

        .edit-profile-container .buttons .cancel-button {
            background-color: #ccc;
            margin-right: 10px;
        }

        .edit-profile-container .about-us {
            width: 334px; 
            height: 170px;
            background: #DEE1E6FF;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .edit-profile-container .about-us h3 {
            margin-top: 0;
            color: #333;
            font-size: 32px;
        }
        /* Background image */
        .background-image {
            position: absolute;
            top: 35px;
            width: 100%;
            height: 168%;
            background: url('../../Assets/Image/Org Edit Background.png') no-repeat center center/cover;
            z-index: -2;
        }
        /* Group 32 */
    .group {
        position: absolute; 
        top: 100px; 
        left: 247px; 
        width: 200px; 
        height: 90px; 
    }
    /* Avatar 1 */
    .avatar {
        top: 86px; 
        left: 45px; 
        width: 177px; 
        height: 177px; 
        font-family: Inter; 
        font-size: 88px; 
        line-height: 88px; 
        font-weight: 400; 
        color: #FFFFFFFF; /* white */
        background: #4069E5FF; /* tertiary1-500 */
        opacity: 1; 
        overflow: hidden; 
        border-radius: 89px; 
    }
    .avatar .badge {
        width: 44px; 
        height: 44px; 
        border-radius: 22px; 
    }
    .avatar.active .badge {
    background: #1DD75BFF; /* success */
    opacity: 1; 
    border-width: 1.5px; 
    border-color: #FFFFFFFF; 
    }
    .avatar.inactive .badge {
    background: #1DD75BFF; /* success */
    opacity: 1; 
    border-width: 1.5px; 
    border-color: #FFFFFFFF; 
    }
    .avatar.idle .badge {
    background: #1DD75BFF; /* success */
    opacity: 1; 
    border-width: 1.5px; 
    border-color: #FFFFFFFF; 
    }
    .avatar.do_not_disturb .badge {
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-size: 44px; 
    line-height: 44px; 
    color: #FFFFFFFF; /* white */
    background: #1DD75BFF; /* success */
    opacity: 1; 
    border-width: 1.5px; 
    border-color: #FFFFFFFF; 
    }
    /* Container 284 */
    .container-2 { 
        top: 286px; 
        left: 25px; 
        width: 800px; 
        background: #FFFFFFFF; /* neutral-300 */
    }
    /* Container 284 */
    .container-3 {
        top: 286px; 
        left: 371px; 
        width: 526px; 
        height: 350px; 
        background: #FFFFFFFF; /* neutral-300 */
    }
    .avatar-2 {
        top: 95%;
        left: 60px;
        width: 30%;
        height: 177px;
        font-family: Inter;
        font-size: 88px;
        line-height: 88px;
        font-weight: 400;
        color: #FFFFFFFF; /* white */
        background: #4069E5FF; /* tertiary1-500 */
        opacity: 1;
        overflow: hidden;
        border-radius: 89px;
        background-image: url('../../Assets/Image/shao.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .dropbtn {
        background-color: #51829B;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #51829B}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #BED7DC;
    }
    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Org | Edit Profile</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">
    </head>


    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Organization/Org Sidebar.php");
        ?>
        <div id="contentArea">
                
                <!-- Header -->
                <?php 
                    include("../General Components & Widget/Organization/Org Header.php");
                ?>

                <!-- Content here -->

                <div class="background-image" style="justify-content: center "></div>
                <div class="overlay"></div>
                <div class="edit-profile-container">

                    <?php    
                            require("../../Database Layer/db_connection.php");
                            //validation 
                            $sqlCheck = "SELECT * FROM organization WHERE OrgId = $orgId";

                            $resultCheck = mysqli_query($con, $sqlCheck);

                            if(mysqli_num_rows($resultCheck) === 1){
                                $row = mysqli_fetch_assoc($resultCheck);

                                $orgId = $row["OrgId"];

                                $_SESSION["Organization"] = $orgId;

                                    
                        }
                    ?>
                    <h2>Edit Profile</h2>
                    <form id="updateProfileForm" action="../../Controller Layer/Organization/Org update profile.php?org=<?php echo $orgId ?>" method="post" enctype = "multipart/form-data">
                        <div style="display: flex;">
                            <?php if (!empty($row['OrgImage'])) : ?>
                                <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                                <img src="data:image/<?php echo pathinfo($row['OrgImage'], PATHINFO_EXTENSION); ?>;base64, <?php echo base64_encode($row['OrgImage']); ?>" class="profile-picture" style = "height: 200px">
                            <?php else : ?>
                                <img src="../../Assets/Image/H20 Harmony Logo.png" class="profile-picture" style = "height: 200px">
                            <?php endif; ?>
                            <div class="group">
                                <label for="logo" style=" font-family: Inter; font-size: 16; line-height: 22px; font-weight: 700; color: #171A1FFF;">Logo</label>
                                <div class="logo-upload">
                                    <p style="text-align:justify; font-size: 10; color: #565E6CFF;">Upload your company logo</p>
                                    <p style="text-align:justify; font-size: 8; color: #565E6CFF;">Your photo should be in PNG or JPG format</p>

                                    <input type="file" id="logo" name="logo" accept=".jpg, .jpeg, .png, .gif">
                                </div>
                            </div>
                            <div style="width: 60%;"></div>
                            <div class="about-us">
                                <h3>About Us</h3>
                                <p style="text-align:justify; line-height: 22px">Mission statement description. A concise summary of the company's goals and objectives.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                       
                            <div class="container-2">
                                <div class="form-group">
                                    <label for="organizationName">Organization name</label>
                                    <input type="text" id="organizationName" name="OrgName" value="<?php echo $row["OrgName"] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="organizationEmail">Organization Email</label>
                                    <input type="email" id="organizationEmail" name="OrgEmail" value="<?php echo $row["OrgEmail"] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="contactInformation">Contact Information</label>
                                    <input type="text" id="contactInformation" name="OrgContact"  value="<?php echo $row["OrgContact"] ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="organizationType">Organization Type</label>
                                <select id="organizationType" name="OrgType" onchange="updateOrgType()">
                                    <option value="Partnership">Partnership</option>
                                    <option value="Corporation">Corporation</option>
                                    <option value="Holding Company">Holding Company</option>
                                    <option value="Foreign Corporation">Foreign Corporation</option>
                                    <option value="Private Limited Company">Private Limited Company</option>
                                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                                </select>
                            </div>
                        <div class="buttons">
                        <button type="submit" class="save-button" name="update-profile">Save profile</button>
                        <button type="button" class="cancel-button" onclick="window.location.href='./Org Company Profile.php'">Cancel</button>
                    
                    </form>
                    </div>   
                </div>
        </div>


    </body>
    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>
</html>