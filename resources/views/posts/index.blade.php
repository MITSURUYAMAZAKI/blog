<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  {{-- asset関数　publicから呼べる --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                投稿一覧
            </div>
            {{-- bladeテンプレートでは@foreach --}}
            @foreach ($posts as $post)
            <div class="card-body">
            <h5 class="card-title">タイトル : {{$post->title}}</h5>
                <p class="card-text">
                  内容 : {{$post->body}}
                </p>
                <p class="card-text">投稿者：Seed Techさん</p>
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">詳細へ</a>
                {{-- idを付与せよ --}}
            </div>
            <div class="card-footer text-muted">
                投稿日時 : {{$post->created_at}}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          {{-- ①routeメソッド --}}
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            新規投稿
          </a>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
