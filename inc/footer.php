<!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Design or Develop By pallavi Barsakar</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="form_submit/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script src="vendor/datatables/jquery.dataTables.js"></script>
    
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->

    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/sb-admin.min.js"></script>

    <!-- Custom scripts for this page-->

    <script src="js/sb-admin-charts.min.js"></script>



    <!-- add row oder table  -->
    <script>
       $("#add_new_row").click(function () {
           $("#mytable").each(function () {
               var tds = '<tr>';
               jQuery.each($('tr:last td', this), function () {
                   tds += '<td>' + $(this).html() + '</td>';
               });
               tds += '</tr>';
               if ($('tbody', this).length > 0) {
                   $('tbody', this).append(tds);
               } else {
                   $(this).append(tds);
               }
           });
      });

       function delete_row(row)
        {

          var x = document.getElementById("mytable").rows.length;

          if (x > 2) {

            row.closest('tr').remove();

            } 
          
        }


        

    </script>

  </div>
</body>

</html>