<footer class="footer fixed">
	<div class="container-fluid">
		<div class="copyright ml-auto">
			<h5 style="color: white;">{{ date('Y') }} &copy; Setor de Desenvolvimento - Prefeitura</h5>
		</div>
	</div>
</footer>
<!--   Core JS Files   -->
<script src="{{url('assets/js/core/popper.min.js')}}"></script>
<script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


<!-- Datatables -->
<script src="{{url('assets/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{url('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{url('assets/js/atlantis.min.js')}}"></script>

{{-- JsValidation
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> --}}

<script>
            $(document).ready(function ($) {
                $('#data_Nascimento').mask('00-00-0000');
                $('#tel').mask('(00) 0 0000-0000');
                $('#tel2').mask('(00) 0 0000-0000');
                $('#cep').mask('00000-000');
            });
        </script>

@hasSection ('javascript')
	
	@yield('javascript')

@endif


</body>

</html>