<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://unpkg.com/vuex@2.0.0"></script>

    <title>Stock trader</title>
</head>
<body>
    <div id="app">
        <meu-header></meu-header>
        <br><br>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>

    
</body>

<script>
Vue.use(VueRouter);

</script>

@component('header')
@endcomponent

@component('home')
@endcomponent

@component('portfolio.portfolio')
@endcomponent

@component('portfolio.stock')
@endcomponent

@component('stocks.stock')
@endcomponent

@component('stocks.stocks')
@endcomponent

@component('rotas')
@endcomponent

<script>
 roteador = new VueRouter({
     mode: 'history',
     routes: routes,

 });


new Vue({
    el: "#app",
    router: roteador,
    components: {
        meuHeader: Header
    }
});



</script>


</html>