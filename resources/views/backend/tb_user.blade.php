<div class="row">
  <div class="col-lg-12">
        <h2>Profile : {{ $user->name }}</h2>
        <hr>
        <h2>Articles</h2>
        @foreach($user->articles as $article)
            <div class="well">
                <h4>{{ $article->title }}</h4>
                {{ $article->content }}
            </div>
        @endforeach
  </div>
</div>