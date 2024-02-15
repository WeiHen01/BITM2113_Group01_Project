<?php

    session_start();
    
    // destroy the session
    if(session_destroy())
    {
        // navigate back to default page / landing page
        echo "<script>
            alert('Log out successfully!!');
            window.location.href = '../../index.php';
        </script>";
        
    }

?>