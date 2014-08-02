atoumbug_php5.6
===============

Run:
```
composer install
php vendor/atoum/atoum/bin/atoum -d tests/units/
```

Error in PHP 5.6RC2 that doesn't happen with 5.5 and 5.4:

```
There is 1 failure:
=> tests\units\Transvision\Utils::testUniqueWords():
In file /home/pascalc/junk/atoumbug_php5.6/tests/units/Transvision/Utils.php on line 34, mageekguy\atoum\asserters\phpArray() failed for data set #0 of data provider uniqueWordsDP: array(7) is not equal to array(7)
-Expected
+Actual
@@ -3 +3,2 @@
+  string(7) "couteau"
+  [1]=>
@@ -5,2 +5 @@
-  [1]=>
-  string(7) "couteau"
```
