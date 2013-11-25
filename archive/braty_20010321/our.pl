    use strict;  # Strict for entire file

    package Foo;
    our $bar;    # $bar is $Foo::bar for rest of lexical scope
    $bar = 582;

    package Bar;
    print $bar;  # prints 582, just as if "our" had been "my"
