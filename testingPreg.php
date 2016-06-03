<?php

// Does not match 
echo "Matches: ".preg_match("/^(Mr|Dr).Smith$/","Dr.Smith ")."\n";

// Matches
echo "Matches: ".preg_match("/(Mr|Dr).Smith$/","Dr.Smith")."\n";

// Matches
echo "Matches: ".preg_match("/^(Mr|Dr).Smith/","Dr.Smith")."\n";

// Does not mathces
echo "Matches: ".preg_match("/^(Mr|Dr).Smith/"," Dr.Smith")."\n";

// Matches
echo "Matches: ".preg_match("/^ (MR|DR).sMiTH$/i"," Dr.Smith")."\n";

// Does not match
echo "Matches: ".preg_match("/^ (MR|DR).sMiTH$/i","           Dr.Smith")."\n";

// Matches
echo "Matches: ".preg_match("/^ +(MR|DR).sMiTH$/i","    Dr.Smith")."\n";

// Does not mathes
echo "Matches: ".preg_match("/^ +(MR|DR).sMiTH$/i","Dr.Smith")."\n";

// Matches
echo "Matches: ".preg_match("/^ *(MR|DR).sMiTH$/i","Dr.Smith")."\n";

?>