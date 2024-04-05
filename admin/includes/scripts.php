<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendor -->
<script src="../assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>
<script src="../assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="../assets/vendor/choices/js/choices.min.js"></script>
<script src="../assets/vendor/dropzone/js/dropzone.js"></script>
<script src="../assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="../assets/vendor/stepper/js/bs-stepper.min.js"></script>
<script src="../assets/vendor/quill/js/quill.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- ThemeFunctions -->
<script src="../assets/js/functions.js"></script>



<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
        placeholder: 'Enter blog content here',
        minHeight: 300
      
      });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote2').summernote({
        placeholder: 'Enter package details here',
        minHeight: 300
      
      });
  })
</script>


<?php 
if(isset($_SESSION['success'])){
?>
<script>
    Swal.fire(
  'Success!',
  '<?php echo $_SESSION['success'];?>',
  'success'
)
</script>
<?php 
unset($_SESSION['success']);} 
?>
<?php 
if(isset($_SESSION['error'])){
?>
<script>
    Swal.fire(
  'An Error Occured!',
  '<?php echo $_SESSION['error'];?>',
  'error'
)
</script>
<?php 
unset($_SESSION['error']);} 
?>

