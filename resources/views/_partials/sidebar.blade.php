<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Rechercher</h5>
        <form class="card-body" action="" method="GET" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
            </div>
        </form>
    </div>


    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Catégories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach ($categories as $category)
                            <li>
                                <a
                                    href="http://localhost:8000/category/{{ $category['slug'] }}">{{ $category['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tags Widget -->
    <div class="card my-4">
        <h5 class="card-header">Tags</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach ($tags as $tag)
                            <li>
                                <a href="http://localhost:8000/tag/{{ $tag['slug'] }}">{{ $tag['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts Widget -->
    <div class="card my-4">
        <h5 class="card-header">Articles récents</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                        @foreach ($recent_posts as $post)
                            <li>
                                <a href="http://localhost:8000/post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Tutoriels</h5>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://www.gekkode.com/developpement/tutoriel-laravel-8-pour-les-debutants/">Tutoriel
                        Laravel 8 pour Débutants</a>
                </li>
            </ul>
        </div>
    </div>

</div>