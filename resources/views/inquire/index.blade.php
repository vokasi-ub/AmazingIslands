<div class="row">
  <div class="col-lg-12">
        <h2>Article</h2>
        <hr>
       
            @foreach ($inquire as $inquire)
                <div class="well">
          <!-- $article->user->name adalah kolom name dari table user -->
                <h3>{{ $inquire->title }} By <a href="{{ url('user/'.$inquire->user_id.'')}}">{{ $inquire->user->name }}</a></h3>
                {{ $inquire->content }}
                </div> 
            @endforeach
        
        <br><br>
        <div class="alert alert-danger"><center>NO ARTICLE FOUND</center></div>
        
  </div>
</div>