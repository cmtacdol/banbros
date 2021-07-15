<script>
<?php if(isset($_SESSION['error_message'])){?>

var error = "<?php echo $_SESSION['error_message']; ?>"
toastr.error(error);

<?php } ?>

<?php unset($_SESSION['error_message']); ?>

<?php if(isset($_SESSION['success_message'])){?>

var success = "<?php echo $_SESSION['success_message']; ?>"
toastr.success(success);

<?php } ?>

<?php unset($_SESSION['success_message']); ?>
</script>