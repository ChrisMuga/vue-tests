<?php include('includes/header.php'); ?>

<div class="container-fluid">

  <div class="row d-flex justify-content-center">

    <!-- col -->
    <div class="col-md-8" id="app">
      <h1>Students App</h1>
      <div class="alert alert-primary" v-bind:title="name">Hi {{ name }}?</div>
      <ul class="list-group">
        <li class="list-group-item active"> Students </li>
        <li class="list-group-item" v-for="student in students">{{students}}</li>
      </ul>
    </div>
    <!-- col -->

  </div>

</div>

<script>
  var app =  new Vue(
    {
      el: '#app',
      data: {
        name:     'Christian',
        students: [
                    "bob",
                    "tom",
                    "tim",
                    "jim"
                  ]
        
        
      }
    }
  );
  </script>
    

<?php include('includes/footer.php'); ?>

