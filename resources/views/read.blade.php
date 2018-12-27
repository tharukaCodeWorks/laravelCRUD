@include('includes.header')

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="lead">{{ $article->title }}</div>
                <p>{{ $article->description }}</p>
            </div>
        </div>
</div>

@include('includes.footer')