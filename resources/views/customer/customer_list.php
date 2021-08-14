<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>



<div id="app">
  <div class="container" style="margin-top:10%;">
    <center>
      <h4>Pesquisa de Produtos</h4>
      <hr>

      <div class="form-group">

        <input type="text" v-on:keyup.enter="getProduct" v-model="search" class="form-control" value="">

      </div>
      <br>
      <div style="float: right;">
        <button v-on:click="getProduct" class="btn btn-primary">Pesquisar</button>
      </div>

      <br>
      <br>
      <table id=" tabela" class="table table-hover" v-if="products != ''">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product.id">
            <td>{{ product.id }}</td>
            <td>{{ product.name }}</td>
            <td>{{ product.description }}</td>
          </tr>
        </tbody>
      </table>
    </center>
  </div>
</div>
<script type="module" src="<?php echo asset('js\app.js') ?>">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">