<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Vue</title>

    
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    {{--

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    --}}


</head>
<body>
    {{--
    <div class="container">
        <div id="select_vue" class="row">
            <form>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Estados</label>
                <select class="form-control" id="exampleFormControlSelect1" v-model="estado_id" v-on:change="onChange">
                  <option v-for="estado in estados" v-bind:value="estado.id" >@{{ estado.estado }}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>    
            </form>    
        </div>    
    </div>
    --}}
    
    

    <div class="content">
        <div id="select_vue" class="row">
            <form action="">
                <div class="input-field col s4">
                    <select v-model="estado_id" v-on:change="onChange">
                      <option v-for="estado in estados" v-bind:value="estado.id" >@{{ estado.estado }}</option>
                    </select>
                    <label>Estados</label>
                </div>

                  <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Municipios</label>
                </div>

                <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Localidades</label>
                </div>
            </form>
        </div>    
    </div>
    

    
    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });

        new Vue({
            el: '#select_vue',
            created: function(){
                this.getEstados();
            },
            mounted: function(){
                $('select').material_select();
            },
            updated: function(){
                $('select').material_select();
            },
            data: {
                estado_id: '',
                estados: []
            },
            methods:{
                getEstados: function(){
                    var url_estado = 'estados';
                    axios.get(url_estado).then(response => {
                        this.estados = response.data;
                    });
                },
                onChange: function ()
                {
                    console.log('Cambio');
                }
            }
        });
    </script>
</body>
</html>