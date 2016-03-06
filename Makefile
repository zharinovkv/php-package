install:
	composer install

lint:
	composer exec 'phpcs --standard=PSR2 src tests'

test:
	composer exec 'phpunit --color tests'
