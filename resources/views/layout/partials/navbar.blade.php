<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Menü</h3>
    </div>
    <ul class="list-unstyled components">
        <p></p>
        <li class="active">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="{{ route('books') }}">Books</a>
        </li>
        <li>
            <a href="{{ route('books') }}">Books</a>
        </li>
    <!--    <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="/products">All Products</a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a href="{{route('category',$category->name)  }}"> {{ $category->name  }}</a>
                    </li>
                @endforeach
            </ul>
        </li> -->

    </ul>
    <ul class="list-unstyled CTAs">
        <li><a href="/login" class="download">Giriş Yap</a></li>
        <li><a></a></li>
    </ul>
</nav>
