The solution involves using the `use` keyword to explicitly bring the `$outerVar` variable into the scope of the inner function. Here's the corrected code:

```php
function outerFunction() {
  $outerVar = 'Hello';

  $innerFunction = function() use ($outerVar) {
    echo $outerVar; 
  };

  $innerFunction();
}

outerFunction(); // Outputs "Hello"
```

For reference handling, always ensure you understand whether you're passing by value or by reference. If you intend to modify the original variable, explicitly use `&` before the variable name when it's passed to a function.  Avoid accidental reassignments within the function that would break the reference.