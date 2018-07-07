<!DOCTYPE html>
<html>

<body>
  <script>
    'use strict';
  function makeWorker() {
  let name = "Pete";

  return function() {
    alert(name);
  };
}

let name = "Serghey";

// create a function
let work = makeWorker();

// call it
console.log(work); /
  </script>
</body>

</html>