

	<?php
	  function autoLoader($className) {
	    include 'classes/'. $className. '.php';
	  }

	  spl_autoload_register('autoLoader');

	  $app = new app;
	?>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
