<script src="{{asset('public/coloshop/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/coloshop/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('public/coloshop/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('public/coloshop/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('public/coloshop/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/coloshop/js/custom.js')}}"></script>
<script src="{{asset('public/js/sweetalert.min.js')}}"></script>


<script>
    @if(session()->has('success'))
        swal({
            title: "Berhasil!",
            text: "{{session()->get('success')}}",
            icon: "success",
        });
@elseif(session()->has('failed'))
    swal({
        title: "Failed!",
        text: "{{session()->get('failed')}}",
        icon: "error",
    });
@endif
</script>

@yield('js')


