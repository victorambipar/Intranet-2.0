<?php

    function head($caminho)
    {
        echo "<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href=\"".$caminho."vendor/bootstrap/css/bootstrap2.min.css\" rel=\"stylesheet\">
        <!-- Custom fonts for this template-->
        <link href=\"".$caminho."vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <!-- Page level plugin CSS-->
        <link href=\"".$caminho."vendor/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\">
        <!-- Custom styles for this template-->
        <link href=\"".$caminho."css/sb-admin.css\" rel=\"stylesheet\">
      </head>";
    }

?>