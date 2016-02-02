<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<body>


<?php 

	$this->load->helper('form'); 
	$attributes = array('class' => 'chat', 'id' => 'chatform');
	echo form_open('',$attributes);


	$hidden = array(
              'user_id'  => '333',
            );

	echo form_hidden($hidden);

	$textarea = array(
              'name'        => 'chat',
              'id'          => 'chat',
              'value'       => 'johndoe',
              'rows'   => '10',
              'cols'        => '30',
            );

	echo form_textarea($textarea);
	echo "<br/>";
	echo form_submit('send_chat', 'Chat!');

	echo "<br/>";
		foreach ($data as  $value) {
			echo $value->chat."<br/>";
		}
	

	
		


?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
		
		$( "#chatform" ).submit(function( event ) {

			event.preventDefault();
		   // Get some values from elements on the page:
		  var $form = $( this ),
		    chat_ = $form.find( "textarea[name='chat']" ).val(),
		    user_id_ = $form.find( "input[name='user_id']" ).val();

		  // $.post( "chat/ajax_insert", { chat: chat_, user_id: user_id_ }).done(function( data ) {
		  $.post( "chat/ajax_insert", { chat: chat_, user_id: user_id_ }).done(function( data ) {
		    alert( "Data Loaded: " + data );
		  });

		  

		});

</script>

</body>
</html>