
$RE_CODEPOSTAL="12string";
if(preg_match("/^[0-9]{2}.*)/")

<!-- 
    /.../          Start and end of the pattern.
^              Start of the string.
[^:]+          At least one character that is not a ':'.
:              A literal ':'.
(?:[^;]+;){N}  Exactly N occurrences of:
                   [^;]+  At least one character that is not a ';'.
                   ;      A literal ';'.
$              End of the string. 
-->

