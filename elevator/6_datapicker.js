 <script>
  $(function() {
    $( "#startDate" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      showButtonPanel: true,
	  showOn: "button",
	  buttonText:"Start",
      onClose: function( selectedDate ) {
        $( "#endDate" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#endDate" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
	  showButtonPanel: true,
	  showOn: "both",
	  buttonText:"End",
      onClose: function( selectedDate ) {
        $( "#startDate" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
	
  });
  </script> 