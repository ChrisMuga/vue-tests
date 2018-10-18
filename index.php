<?php include('includes/header.php'); ?>

<div class="container-fluid" id="app">

  <div class="row d-flex justify-content-center">

    <!-- col -->
    <div class="col-md-8" >
      <h1>Students App</h1>
      <div class="alert alert-primary" v-bind:title="name">Hi {{ name }}? <span class="badge badge-warning prompt" v-on:click="alert">Prompt Me</span> </div>
      <ul class="list-group">
        <li class="list-group-item active"> Students </li>
        <li class="list-group-item" v-for="student, index in students"><span class="badge badge-danger">{{index+1}}</span> {{ student.toUpperCase() }}</li>
      </ul>
    </div>
    <!-- col -->

    <!-- modal -->
    <div class="modal" tabindex="-1" role="dialog" id="modal1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hello</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h1>Hello {{ name }}?</h1>
            <p>Yours is the world, and everything that's in it.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal -->

  </div>

</div>

<script>
  var app =  new Vue(
    {
      el:         '#app',

      data:       function()
                  {
                    return {

                              name:     'Christian',
                              students: [
                                          "bob",
                                          "tom",
                                          "tim",
                                          "jim"
                                        ]

                            }
                  },

      methods:    {

                      alert:  function()
                              {
                                $('#modal1').modal('show');
                              }

                  }
    }
  );
  </script>

  <style scope>
    .prompt{float: right;}
    .prompt:hover{cursor: pointer;}
  </style>
    

<?php include('includes/footer.php'); ?>

