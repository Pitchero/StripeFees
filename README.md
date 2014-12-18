StripeFees
======
Website: https://stripefees.com

## Usage
Access the compiled version at https://stripefees.com/fees.json

## Contribution

#### Add a new country

The PHP classes exist purely to give some structure. Please open the /src/fees/_template.php file, add the fee structures (see existing files for examples), save it as {ISO COUNTRY CODE}.php in the same directory, run generator.php to build the new fees.json, then issue a pull request.

#### Edit an existing country

Edit the relevant {ISO COUNTRY CODE}.php file in /src/fees/, run generator.php to build the new fees.json, then issue a pull request.