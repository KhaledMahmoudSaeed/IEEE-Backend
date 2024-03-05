<?php
# This is my main solution
echo <<< 'now'
<dl>
    <dt>Hello "'Elzero'" </dt>
    <dt> We Love $Programming$</dt>
    <dt>Languages Specially "PHP"</dt>
</dl>
now;
# There is \r\n .. \n .. and all escape characters can't be used to make new line 
# however it would be possible if we use <pre> and </pre>


# There is a different soultions because I can't use any of escape characters to make a new line 

echo '<pre>';
echo "Hello 'Elzero' 
We Love \$Programming$ . PHP_EUL
Languages Specially \"PHP\"";
echo '</pre>';

echo "yxy0".PHP_EOL

echo '<pre>';
echo "Hello 'Elzero' \nWe Love \$Programming$ \nLanguages Specially \"PHP\"";
echo '</pre>';

#note that without using <pre> before text neither  \n nor \r\n will be useful or work
echo "Hello 'Elzero' \r\n
We Love \$Programming$ \n
Languages Specially \"PHP\"";
