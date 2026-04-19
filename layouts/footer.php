<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    })
</script>

<?php
if(isset($_SESSION['alert'])) {
    ?>
    <script>
        fire({
        icon: "<?= $_SESSION['alert']['type'] ?? 'success' ?>",
        title: "<?= $_SESSION['alert']['message'] ?? 'Congratulations! You have been registered.' ?>"
    });
    </script>
<?php
}
session_unset();
?>

</body>
</html>
