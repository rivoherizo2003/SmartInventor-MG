.PHONY: clear

clear:
	@php artisan config:clear
	@php artisan cache:clear

phpstan:
	@vendor/bin/phpstan analyse --memory-limit=2G

testunit:
	@php artisan test

pinter:
	@vendor/bin/pint --diff=main --repair