<!--footer-->
<footer class="footer">
    <div class="container">
<text>&copy;  2021 Genesis J Oliva</text>
      <span class="text-muted">
        <a style="
    background-color: white;
    color: black;
    padding: 8px;
    float: right;
    margin: 0 4px;
" href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=es">Español</a>
        <a style="
    background-color: white;
    color: black;
    padding: 8px;
    float: right;
    margin: 0 4px;
" href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=en">English</a>
      </span>
    </div>
    <script src="<?php echo $js; ?>jquery-3.2.1.min.js"></script>
  <script src="<?php echo $js; ?>moment.min.js"></script>
  <script src="<?php echo $js; ?>bootstrap.min.js"></script>
  <script src="<?php echo $js; ?>bootstrap-datetimepicker.min.js"></script>
  <script src="<?php echo $js; ?>jquery.dataTables.min.js"></script>
  <script src="<?php echo $js; ?>dataTables.bootstrap.min.js"></script>

  <script>
    $('.table').dataTable();
  </script>

  <script src="<?php echo $js; ?>custom.js"></script>

  <?php if (isset($dashboard)) { ?>
    <!-- CUSTOM DASHBOARD SCRIPT -->
    <script src="<?php echo $js; ?>dashboard.js"></script>
  <?php } ?>

  <script src="<?php echo $js; ?>parsley.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <script src="<?php echo $js; ?>bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
      $(function () {
          $('#datetimepickerempdob').datetimepicker({
              format: 'YYYY-MM-DD',
          });
          $('#datetimepickeremphierDate').datetimepicker({
              format: 'YYYY-MM-DD',
          });
          $('#datetimepickerpatdob').datetimepicker({
              format: 'YYYY-MM-DD',
          });
          $('#datetimepickerarticleDate').datetimepicker({
              format: 'YYYY-MM-DD',
          });
          $('#datetimepickerreceiptDate').datetimepicker({
              format: 'YYYY-MM-DD',
          });
          $('#datetimepickerreceiptdeliveryDate').datetimepicker({
              format: 'YYYY-MM-DD',
          });
      });
  </script>
  </footer>
</body>
</html>
<?php ob_end_flush(); ?>
