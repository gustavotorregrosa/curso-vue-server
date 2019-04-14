<script type="text/x-template" id="comp-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <router-link to="/" class="navbar-brand">Stock Trader</router-link>
 
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <router-link activeClass="active" tag="li" to="/portfolio"><a  class="nav-link">Portfolio</a></router-link>
        <router-link activeClass="active" tag="li" to="/stocks"><a  class="nav-link">Stocks</a></router-link>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          End day
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Save Data</a>
          <a class="dropdown-item" href="#">Load Data</a>
        </div>
      </li>
    </ul>


  </div>
</nav>
</script>


<script>
    Header = Vue.component('comp-header', {
        template: "#comp-header"
    });
</script>