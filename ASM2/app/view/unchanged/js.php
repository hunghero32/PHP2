    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Kiểm tra nhập lại -->
    <script>
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var passwordError = document.getElementById("passwordError");

        if (password !== confirmPassword) {
            passwordError.textContent = "Passwords do not match";
            // Bạn có thể thực hiện các hành động khác nếu cần thiết, ví dụ: disable nút Submit
        } else {
            passwordError.textContent = "";
            // Bạn có thể thực hiện các hành động khác nếu cần thiết, ví dụ: enable nút Submit
        }
    }
</script>