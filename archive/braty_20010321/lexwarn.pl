use strict;
use warnings;

my $a = undef;
print $a, "\n";  # -w gives 'use of undefined variable warning'

{
  no warnings;     # Turn off warnings here
  print $a, "\n";  # No warning emitted
}
