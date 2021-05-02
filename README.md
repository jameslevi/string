# String Helpers

![](https://img.shields.io/badge/packagist-v1.0.0-informational?style=flat&logo=<LOGO_NAME>&logoColor=white&color=2bbc8a) ![](https://img.shields.io/badge/license-MIT-informational?style=flat&logo=<LOGO_NAME>&logoColor=white&color=2bbc8a)

Is a simple library that provides common string functions not natively provided by PHP.

## Installation ##
1. You can install via composer.
```
composer require jameslevi/string
```
2. If you are not using any PHP framework, just paste this code at the upper part of your code to include composer autoload mechanism in your project.
```php
<?php

if(file_exists(__DIR__.'/vendor/autoload.php'))
{
    require __DIR__.'/vendor/autoload.php';
}
```
3. You can now use all functions included from this library.

## str_equals(string $string, mixed $match) ##
Make comparison between two strings.
```php
// Returns true because "hello" matches one of the word inside array.
str_equals("hello", array(
  "hello",
  "world",
))
```

## str_start_with(string $string, mixed $match) ##
Determine if string starts with the match string.
```php
str_start_with("hello", "h") // Returns true because hello starts with an h.
```

## str_end_with(string $string, mixed $match) ##
Determine if string ends with the match string.
```php
// Returns false because @email.com is not included from the array.
str_end_with("foo@email.com", array(
  "@gmail.com",
  "@yahoo.com",
))
```

## str_remove(string $string, mixed $search) ##
Remove all matched character from the string.
```php
str_remove("hello world", "l") // Returns "heo word".
```

## str_move(string $string, int $start, int $end = 0) ##
Remove one or more characters from one or both side of the string.
```php
str_move("hello world", 1, 2) // Returns "ello wor".
```

## str_move_left(string $string, int $count) ##
Remove one or more characters from the left side of the string.
```php
str_move_left("hello world", 3) // Returns "lo world".
```

## str_move_right(string $string, int $count) ##
Remove one or more characters from the right side of the string.
```php
str_move_right("hello world", 2) // Returns "hello wor".
```

## str_count_numeric(string $string) ##
Count the number of occurences of numeric characters in string.
```php
str_count_numeric("hello world 123") // Returns "3".
```

## str_count_uppercase_letter(string $string) ##
Count the number of occurences of uppercase letters in string.
```php
str_count_uppercase_letter("Hello World") // Returns "2".
```

## str_count_lowercase_letter(string $string) ##
Count the number of occurences of lowercase letters in string.
```php
str_count_lowercase_letter("Hello World") // Returns "8".
```

## str_count_letter(string $string) ##
Count the number of occurences of letters in string.
```php
str_count_letter("Hello World") // Returns "10".
```

## str_count_line(string $string) ##
Count the number of lines in string.
```php
str_count_line("Hello World") // Returns "1".
```

## str_count_spaces(string $string) ##
Count the number of spaces in string.
```php
str_count_spaces("Hello World") // Returns "1".
```

## str_count_special_chars(string $string) ##
Count the number of special characters in string.
```php
str_count_special_chars("Hello World!!!") // Returns "3".
```

## str_count_words(string $string) ##
Count the number of words in a string.
```php
str_count_words("Hello World") // Returns "2".
```

## str_words(string $string) ##
Return list of words from the string.
```php
str_words("Hello World") 
```
This function will return
```
array(2)
(
  [0] => "Hello"
  [1] => "World"
)
```

## str_contains(string $string, mixed $keywords) ##
Test if string contains one or more word or characters.
```php
str_contains("Hello World", "Hello") // Returns true.
```

## str_break(string $string, string $delimeter) ##
Break a string into just two segments.
```php
str_break("Hello World", " ")
```
This function will return
```
array(2)
(
  [0] => "Hello"
  [1] => "World"
)
```

## str_is_upper(string $string) ##
Determine if string is in uppercase.
```php
str_is_upper("hello world") // Returns false.
str_is_upper("Hello World") // Returns false.
str_is_upper("HELLO WORLD") // Returns true.
```

## str_is_lower(string $string) ##
Determine if string is in lowercase.
```php
str_is_lower("hello world") // Returns true.
str_is_lower("Hello World") // Returns false.
str_is_lower("HELLO WORLD") // Returns false.
```

## str_uppercase(string $string, int $position) ##
Make a letter uppercase by position number.
```php
str_uppercase("hello world", 0) // Returns "Hello world".
```

## str_lowercase(string $string, int $position) ##
Make a letter lowercase by position number.
```php
str_lowercase("Hello World", 6) // Returns "Hello world".
```

## str_to_camel(string $string) ##
Convert group of words into camel case.
```php
str_to_camel("Hello World") // Returns "helloWorld".
```

## str_to_snake(string $string) ##
Convert group of words into snake case.
```php
str_to_snake("Hello World") // Returns "hello_world".
```

## str_to_kebab(string $string) ##
Convert group of words into kebab case.
```php
str_to_kebab("Hello World") // Returns "hello-world".
```

## str_to_pascal(string $string) ##
Convert group of words into pascal case.
```php
str_to_pascal("Hello World") // Returns "HelloWorld".
```

## str_camel_to_snake(string $string) ##
Convert string from camel case to snake case.
```php
str_camel_to_snake("helloWorld") // Returns "hello_world".
```

## str_camel_to_kebab(string $string) ##
Convert string from camel case to kebab case.
```php
str_camel_to_kebab("helloWorld") // Returns "hello-world".
```

## str_camel_to_pascal(string $string) ##
Convert string from camel case to pascal case.
```php
str_camel_to_pascal("helloWorld") // Returns "HelloWorld".
```

## str_snake_to_camel(string $string) ##
Convert string from snake case to camel case.
```php
str_snake_to_camel("hello_world") // Returns "helloWorld".
```

## str_snake_to_kebab(string $string) ##
Convert string from snake case to kebab case.
```php
str_snake_to_kebab("hello_world") // Returns "hello-world".
```

## str_snake_to_pascal(string $string) ##
Convert string from snake case to pascal case.
```php
str_snake_to_pascal("hello_world") // Returns "HelloWorld".
```

## str_kebab_to_camel(string $string) ##
Convert string from kebab case to camel case.
```php
str_kebab_to_camel("hello-world") // Returns "helloWorld".
```

## str_kebab_to_snake(string $string) ##
Convert string from kebab case to snake case.
```php
str_kebab_to_snake("hello-world") // Returns "hello_world".
```

## str_kebab_to_pascal(string $string) ##
Convert kebab case string to pascal case.
```php
str_kebab_to_pascal("hello-world") // Returns "HelloWorld".
```

## str_pascal_to_camel(string $string) ##
Convert string from pascal case string to camel case.
```php
str_pascal_to_camel("HelloWorld") // Returns "helloWorld".
```

## str_pascal_to_snake(string $string) ##
Convert string from pascal case to snake case.
```php
str_pascal_to_snake("HelloWorld") // Returns "hello_world".
```

## str_pascal_to_kebab(string $string) ##
Convert string from pascal case to kebab case.
```php
str_pascal_to_kebab("HelloWorld") // Returns "hello-world".
```

## str_camel_to_words(string $string) ##
Convert camel case string to words.
```php
str_camel_to_words("helloWorld") // Returns "hello world".
```

## str_snake_to_words(string $string) ##
Convert snake case string to words.
```php
str_snake_to_words("hello_world") // Returns "hello world".
```

## str_kebab_to_words(string $string) ##
Convert kebab case string to words.
```php
str_kebab_to_words("hello-world") // Returns "hello world".
```

## str_pascal_to_words(string $string) ##
Convert pascal case string to words.
```php
str_pascal_to_words("HelloWorld") // Returns "hello world".
```

## str_truncate(string $string, int $max) ##
Truncate string if exceeded the maximum charachters and automatically append "..." at the end of the string.
```php
str_truncate("Hello World!!!", 8) // Returns "Hello...".
```

## Contribution ##
For issues, concerns and suggestions, you can email James Crisostomo via nerdlabenterprise@gmail.com.

## License ##
This package is an open-sourced software licensed under [MIT](https://opensource.org/licenses/MIT) License.
