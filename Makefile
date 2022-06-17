run:
		docker-compose up -d
		docker-compose exec cli php -f linked_list.php
