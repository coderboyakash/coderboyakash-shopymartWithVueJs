require('./bootstrap');
$( "#form" ).submit(function( event ) {
  data = $( this ).serializeArray();
  url = $( this ).data('url');
  type = $( this ).data('type');
  $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type:type,
      url:url,
      data:data,
      success:function(response) {
        Toast.fire({
          icon: 'success',
          title: response
        })
      }
  });
  event.preventDefault();
});