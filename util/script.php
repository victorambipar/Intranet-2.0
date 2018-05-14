<?php

    function script($caminho)
    {
      echo  "<!-- Bootstrap core JavaScript-->
    <script src=\"".$caminho."vendor/jquery/jquery.min.js\"></script>
    <script src=\"".$caminho."vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- Core plugin JavaScript-->
    <script src=\"".$caminho."vendor/jquery-easing/jquery.easing.min.js\"></script>
    <!-- Page level plugin JavaScript-->
    <script src=\"".$caminho."vendor/chart.js/Chart.min.js\"></script>
    <script src=\"".$caminho."vendor/datatables/jquery.dataTables.js\"></script>
    <script src=\"".$caminho."vendor/datatables/dataTables.bootstrap4.js\"></script>
    <!-- Custom scripts for all pages-->
    <script src=\"".$caminho."js/sb-admin.min.js\"></script>
    <!-- Custom scripts for this page-->
    <script src=\"".$caminho."js/sb-admin-datatables.min.js\"></script>
    <script src=\"".$caminho."js/sb-admin-charts.min.js\"></script>";
    }

?>