<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8"'>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel='stylesheet' href="{{ asset('/css/style.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class='container'>
    <h1 class='page-header'>DAWN SNS</h1>
    <form action="/post/create" method="post">
      @csrf
      <div class="form-group">
        <input type="text" name="newPost" class="form-control" placeholder="投稿内容">
      </div>
      <div class="pull-right submit-btn">
        <button type="submit" class="btn btn-success">ポスト</button>
      </div>
    </form>
    <h2 class='page-header'>一覧</h2>
    <table class='table table-hover'>
      <tr>
        <th>投稿No</th>
        <th>投稿内容</th>
        <th>投稿日時</th>
      </tr>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->post }}</td>
        <td>{{ $post->created_at }}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <div>
    <a href="/search">ユーザー検索</a>
  </div>
  <footer>
    <small>Laravel@dawn.curriculum</small>
  </footer>
</body>

</html>
