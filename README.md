# PHP Nested Function Scope Bug

This repository demonstrates a common error in PHP related to variable scope within nested functions and closures. The `bug.php` file contains code that exhibits the issue, resulting in unexpected behavior. The `bugSolution.php` file provides a corrected version.

**Problem:** Incorrect handling of variable scope and references in nested functions can lead to unexpected results, including undefined variable notices or unexpected values.  PHP often doesn't explicitly signal these errors, making debugging harder.

**Solution:** Use the `use` keyword to explicitly import variables into closures. For references, ensure correct handling to avoid unintended side-effects. 