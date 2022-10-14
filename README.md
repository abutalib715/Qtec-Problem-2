# Qtec-Problem-2 Explanation

First of all we determine the length of the string and pattern. And Initialized the counter variable;
Then for every index of string from 0 to ($str_length-$pat_length) we are looking for the pattern by iterate over the pattern text.
If we can looping over full pattern without any issue that means pattern matches successfully, so we increment the counter value.
Otherwise, if any character not matches we set the mismatch flag to 'true' and break the loop.
After iterating over the string, we will have found all occurrences of the pattern in the string.
