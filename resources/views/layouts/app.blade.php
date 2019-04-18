
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dreamscape Networks</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
<link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/backend_css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/toastr.min.css')}}" />

</head>
<body>

@include('layouts.layouts_admin.admin_header')
@include('layouts.layouts_admin.admin_sidebar')

@yield('content')

@include('layouts.layouts_admin.admin_footer')

<script src="{{asset('js/backend_js/excanvas.min.js') }}"></script> 
<!-- <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>  -->
<script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.gritter.min.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.interface.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.chat.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.validate.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.wizard.js')}}"></script> 
<script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script> 
<script src="{{asset('js/backend_js/select2.min.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.popover.js')}}"></script> 
<script src="{{asset('js/backend_js/matrix.tables.js')}}"></script>

<script src="{{asset('js/backend_js/jquery.min.js') }}"></script>
<script src="{{asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{asset('js/backend_js/bootstrap.min.js') }}"></script> 
<!-- <script src="{{asset('js/backend_js/jquery.uniform.js') }}"></script>  -->
<!-- <script src="{{asset('js/backend_js/select2.min.js') }}"></script>  -->
<script src="{{asset('js/backend_js/jquery.dataTables.min.js') }}"></script> 
<script src="{{asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{asset('js/backend_js/matrix.tables.js') }}"></script>
<script src="{{asset('js/backend_js/toastr.min.js') }}"></script>


<script type="text/javascript">

  

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif

  $(document).ready(function() {
    $('#accessory').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );



// Generate a password string
function randString(id){
  var dataSet = $(id).attr('data-character-set').split(',');  
  var possible = '';
  if($.inArray('a-z', dataSet) >= 0){
    possible += 'abcdefghijklmnopqrstuvwxyz';
  }
  if($.inArray('A-Z', dataSet) >= 0){
    possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  if($.inArray('0-9', dataSet) >= 0){
    possible += '0123456789';
  }
  if($.inArray('#', dataSet) >= 0){
    possible += '![]{}()%&*$#^<>~@|';
  }
  var text = '';
  for(var i=0; i < $(id).attr('data-size'); i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}


// Create a new password
$(".getNewPass").click(function(){
  var field = $(this).closest('div').find('input[rel="gp"]');
  field.val(randString(field));
});

// Auto Select Pass On Focus
$('input[rel="gp"]').on("click", function () {
   $(this).select();
});



function myStatus() {

  if(document.getElementById('status') =='active'){
    document.getElementById('resigned_field').style.display = 'none';
  }
  else{
    document.getElementById('resigned_field').style.display = 'block';
  }
  
}
</script>




</body>
</html>


<!-- System Developer: Jovith Ngoho -->
