<?php

    function functions()
    {
        echo "<script>
        function user(id)
        {
        var x = \"id_user_birthday\";
        x = x + id;
        var id_user = document.getElementById(x).value;
        id_user.value=id;
        var url = \"id_user=\" + id;
        window.location= \"pages/profile_user.php?\"+ url;
        }
        function user2(id)
        {
        var x = \"id_user_birthday\";
        x = x + id;
        var id_user = document.getElementById(x).value;
        id_user.value=id;
        var url = \"id_user=\" + id;
        window.location= \"../pages/profile_user.php?\"+ url;
        }
        </script>";
    }

?>