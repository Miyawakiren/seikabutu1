<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">>
            @csrf
            <div class="title">
                <h2>作品名</h2>
                <input type="text" name="post[title]" placeholder="タイトル"value="{{ old('post.title') }}"/>
                 <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            </div>
            <div class="body">
                <h2>聖地の感想</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                 <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <div class="category">
                <h2>場所</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
         <div class="back">[<a href="/">戻る</a>]</div>
        </div>
    </body>
</html>