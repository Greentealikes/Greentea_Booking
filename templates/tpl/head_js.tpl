    <script src="<{$xoImgUrl}>js/jquery-3.3.1.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery-migrate-3.0.0.js"></script>
    <script src="<{$xoImgUrl}>js/popper.min.js"></script>
    <script src="<{$xoImgUrl}>js/bootstrap.min.js"></script>
    <script src="<{$xoImgUrl}>js/owl.carousel.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.sticky.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.waypoints.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.animateNumber.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.fancybox.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.stellar.min.js"></script>
    <script src="<{$xoImgUrl}>js/jquery.easing.1.3.js"></script>
    <script src="<{$xoImgUrl}>js/bootstrap-datepicker.min.js"></script>
    <script src="<{$xoImgUrl}>js/isotope.pkgd.min.js"></script>
    <script src="<{$xoImgUrl}>js/aos.js"></script>
    <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
    
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css"> 
    <{if $redirect}>
        <script>
        window.onload = function(){
            Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: "<{$message}>",
            showConfirmButton: false,
            timer: <{$time}>
            })
        }
        </script>
    <{/if}>