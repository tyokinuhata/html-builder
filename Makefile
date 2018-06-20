setup:
	composer install
	touch index.php

up:
	php -S localhost:8000 index.php
