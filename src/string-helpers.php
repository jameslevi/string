<?php

/**
 * Determine if atleast one of the match string is 
 * equal with the string to test.
 * 
 * @param   string $string
 * @param   mixed $match
 * @return  bool
 */

if(!function_exists('str_equals'))
{
    function str_equals(string $string, $match)
    {
        if(is_string($match))
        {
            $match = [$match];
        }

        if(is_array($match))
        {
            foreach($match as $item)
            {
                if($string === $item)
                {
                    return true;
                }
            }
        }

        return false;
    }
}

/**
 * Determine if string starts with the match string.
 * 
 * @param   string $string
 * @param   mixed $match
 * @return  bool
 */

if(!function_exists('str_startwith'))
{
    function str_startwith(string $string, $match)
    {
        if(is_string($match))
        {
            $match = [$match];
        }

        if(is_array($match))
        {
            foreach($match as $item)
            {
                if(substr($string, 0, strlen($item)) === $item)
                {
                    return true;
                }
            }
        }

        return false;
    }
}

/**
 * Determine if string ends with the match string.
 * 
 * @param   string $string
 * @param   mixed $match
 * @return  bool
 */

if(!function_exists('str_endwith'))
{
    function str_endwith(string $string, $match)
    {
        if(is_string($match))
        {
            $match = [$match];
        }

        if(is_array($match))
        {
            foreach($match as $item)
            {
                if(substr($string, strlen($string) - strlen($item), strlen($string)) === $item)
                {
                    return true;
                }
            }
        }

        return false;
    }
}

/**
 * Remove all character from string.
 * 
 * @param   string $string
 * @param   mixed $search
 * @return  string
 */

if(!function_exists('str_remove'))
{
    function str_remove(string $string, $search)
    {
        return str_replace($search, '', $string);
    }
}

/**
 * Strip string in one or both side.
 * 
 * @param   string $string
 * @param   int $start
 * @param   int $end
 * @return  string
 */

if(!function_exists('str_move'))
{
    function str_move(string $string, int $start, int $end = 0)
    {
        $string = substr($string, $start, strlen($string));

        if($end > 0)
        {
            $string = substr($string, 0, strlen($string) - $end);
        }

        return $string;
    }
}

/**
 * Strip left side of the string.
 * 
 * @param   string $string
 * @param   int $count
 * @return  string
 */

if(!function_exists('str_moveleft'))
{
    function str_moveleft(string $string, int $count)
    {
        return str_move($string, $count);
    }
}

/**
 * Strip right side of the string.
 * 
 * @param   string $string
 * @param   int $count
 * @return  string
 */

if(!function_exists('str_moveright'))
{
    function str_moveright(string $string, int $count)
    {
        return str_move($string, 0, $count);
    }
}

/**
 * Count the number occurence of numeric characters in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_numeric'))
{
    function str_count_numeric(string $string)
    {
        return count(array_filter(str_split($string),'is_numeric'));
    }
}

/**
 * Count the number of occurences of uppercase letters in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_ucaseletter'))
{
    function str_count_ucaseletter(string $string)
    {
        return strlen(preg_replace('![^A-Z]+!', '', $string));
    }
}

/**
 * Count the number of occurences of lowercase letters in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_lcaseletter'))
{
    function str_count_lcaseletter(string $string)
    {
        return strlen(preg_replace('![^a-z]+!', '', $string));
    }
}

/**
 * Count the number of occurences of letters in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_letter'))
{
    function str_count_letter(string $string)
    {
        return str_count_ucaseletter($string) + str_count_lcaseletter($string);
    }
}

/**
 * Count the number of occurences of line breaks in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_line'))
{
    function str_count_line(string $string)
    {
        return substr_count($string, PHP_EOL) + 1;
    }
}

/**
 * Count the number of occurences of spaces in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_spaces'))
{
    function str_count_spaces(string $string)
    {
        return substr_count($string, " ");
    }
}

/**
 * Count the number of occurences of special characters in string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_specialcharacter'))
{
    function str_count_specialcharacter(string $string)
    {
        $string = str_remove(trim($string), PHP_EOL);

        return strlen($string) - (str_count_letter($string) + str_count_numeric($string) + str_count_spaces($string));
    }
}

/**
 * Count the number of words in a string.
 * 
 * @param   string $string
 * @return  int
 */

if(!function_exists('str_count_words'))
{
    function str_count_words(string $string)
    {
        return count(str_words($string));
    }
}

/**
 * Return an array of words in string.
 * 
 * @param   string $string
 * @return  array
 */

if(!function_exists('str_words'))
{
    function str_words(string $string)
    {
        $string = str_replace(PHP_EOL, " ", trim($string));

        return explode(" ", $string);
    }
}

/**
 * Break a string into just a two segments.
 * 
 * @param   string $string
 * @param   string $delimeter
 * @return  array
 */

if(!function_exists('str_break'))
{
    function str_break(string $string, string $delimeter)
    {
        $pos = strpos($string, $delimeter);

        return array(
            substr($string, 0, $pos),
            substr($string, $pos + 1, strlen($string)),
        );
    }
}

/**
 * Determine if string is in uppercase.
 * 
 * @param   string $string
 * @return  bool
 */

if(!function_exists('str_is_upper'))
{
    function str_is_upper(string $string)
    {
        return strtoupper($string) === $string;
    }
}

/**
 * Determine if string is in lowercase.
 * 
 * @param   string $string
 * @return  bool
 */

if(!function_exists('str_is_lower'))
{
    function str_is_lower(string $string)
    {
        return strtolower($string) === $string;
    }
}

/**
 * Make a letter lowercase by index number.
 * 
 * @param   string $string
 * @param   int $index
 * @return  string
 */

if(!function_exists('str_lcase'))
{
    function str_lcase(string $string, int $index)
    {
        return substr($string, 0, $index) . strtolower($string[$index]) . substr($string, $index + 1, strlen($string));
    }
}

/**
 * Make a letter uppercase by index number.
 * 
 * @param   string $string
 * @param   int $index
 * @return  string
 */

if(!function_exists('str_ucase'))
{
    function str_ucase(string $string, int $index)
    {
        return substr($string, 0, $index) . strtoupper($string[$index]) . substr($string, $index + 1, strlen($string));
    }
}

/**
 * Convert group of words into camel case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_to_camel'))
{
    function str_to_camel(string $string)
    {
        return str_snake_to_camel(str_to_snake($string));
    }    
}

/**
 * Convert group of words into snake case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_to_snake'))
{
    function str_to_snake(string $string)
    {
        return strtolower(str_replace(" ", "_", trim($string)));
    }
}

/**
 * Convert group of words into kebab case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_to_kebab'))
{
    function str_to_kebab(string $string)
    {
        return str_snake_to_kebab(str_to_snake($string));
    }
}

/**
 * Convert group of words into pascal case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_to_pascal'))
{
    function str_to_pascal(string $string)
    {
        return str_snake_to_pascal(str_to_snake($string));
    }
}

/**
 * Convert camel case string to snake case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_camel_to_snake'))
{
    function str_camel_to_snake(string $string)
    {
        $text = "";
        $char = str_split($string);

        for($i = 0; $i <= sizeof($char) - 1; $i++)
        {
            if(str_is_upper($char[$i]) && $i != 0)
            {
                $text .= "_" . strtolower($char[$i]);
            }
            else
            {
                $text .= strtolower($char[$i]);
            }
        }

        return $text;
    }
}

/**
 * Convert camel case string to kebab case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_camel_to_kebab'))
{
    function str_camel_to_kebab(string $string)
    {
        $text  = "";
        $char = str_split($string);

        for($i = 0; $i <= sizeof($char) - 1; $i++)
        {
            if(str_is_upper($char[$i]) && $i != 0)
            {
                $text .= "-" . strtolower($char[$i]);
            }
            else
            {
                $text .= strtolower($char[$i]);
            }
        }

        return $text;
    }
}

/**
 * Convert camel case string to pascal case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_camel_to_pascal'))
{
    function str_camel_to_pascal(string $string)
    {
        return ucfirst($string);
    }
}

/**
 * Convert snake case string to camel case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_snake_to_camel'))
{
    function str_snake_to_camel(string $string)
    {
        $text = "";

        foreach(explode("_", $string) as $char)
        {
            $text .= ucfirst($char);
        }

        return str_lcase($text, 0);
    }
}

/**
 * Convert snake case string to kebab case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_snake_to_kebab'))
{
    function str_snake_to_kebab(string $string)
    {
        return str_replace("_", "-", strtolower($string));
    }
}

/**
 * Convert snake case string to pascal case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_snake_to_pascal'))
{
    function str_snake_to_pascal(string $string)
    {
        $text = "";

        foreach(explode("_", $string) as $char)
        {
            $text .= ucfirst($char);
        }

        return $text;
    }
}

/**
 * Convert kebab case string to camel case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_kebab_to_camel'))
{
    function str_kebab_to_camel(string $string)
    {
        $text = "";

        foreach(explode("-", $string) as $char)
        {
            $text .= ucfirst($char);
        }

        return str_lcase($text, 0);
    }
}

/**
 * Convert kebab case string to snake case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_kebab_to_snake'))
{
    function str_kebab_to_snake(string $string)
    {
        return str_replace("-", "_", strtolower($string));
    }
}

/**
 * Convert kebab case string to pascal case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_kebab_to_pascal'))
{
    function str_kebab_to_pascal(string $string)
    {
        $text = "";

        foreach(explode("-", $string) as $char)
        {
            $text .= ucfirst($char);
        }

        return $text;
    }
}

/**
 * Convert pascal case string to camel case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_pascal_to_camel'))
{
    function str_pascal_to_camel(string $string)
    {
        return str_lcase($string, 0);
    }
}

/**
 * Convert pascal case string to snake case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_pascal_to_snake'))
{
    function str_pascal_to_snake(string $string)
    {
        $text = "";
        $char = str_split($string);

        for($i = 0; $i <= sizeof($char) - 1; $i++)
        {
            if(str_is_upper($char[$i]) && $i != 0)
            {
                $text .= "_" . strtolower($char[$i]);
            }
            else
            {
                $text .= strtolower($char[$i]);
            }
        }

        return $text;
    }
}

/**
 * Convert pascal case to kebab case.
 * 
 * @param   string $string
 * @return  string
 */

if(!function_exists('str_pascal_to_kebab'))
{
    function str_pascal_to_kebab(string $string)
    {
        $text = "";
        $char = str_split($string);

        for($i = 0; $i <= sizeof($char) - 1; $i++)
        {
            if(str_is_upper($char[$i]) && $i != 0)
            {
                $text .= "-" . strtolower($char[$i]);
            }
            else
            {
                $text .= strtolower($char[$i]);
            }
        }

        return $text;
    }
}