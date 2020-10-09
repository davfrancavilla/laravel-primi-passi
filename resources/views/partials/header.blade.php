<nav>
    <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="logo">
    <ul>
        <li class="{{(url()->current()==route("home")) ? "active" : "noactive"}}"><a href="{{route("home")}}" class="link">Home</a></li>
        <li class="{{(url()->current()==route("products")) ? "active" : "noactive"}}"><a href="{{route("products")}}" class="link">Prodotti</a></li>
        <li class="{{(url()->current()==route("contacts")) ? "active" : "noactive"}}"><a href="{{route("contacts")}}" class="link">Contatti</a></li>
    </ul>
</nav>

