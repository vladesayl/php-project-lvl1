install:
	composer install
lint:
	composer run-script phpcs -- --standard=PSR12 src
lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src tests
test:
	composer run-script phpunit tests
