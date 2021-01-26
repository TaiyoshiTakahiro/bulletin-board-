<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header class="navbar navbar-dark bg-dark">
    <div class="container">
        <div>
          <a class="navbar-brand" href="">
            PHP Full Scratch
          </a>
        </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="my-4">
        <a href="create" class="btn btn-primary">
          投稿を新規作成する
        </a>
      </div>
      <?php foreach($posts as $post):?>
        <div class="card mb-4">
          <div class="card-header">
            <h2><?php echo $post["title"];?></h2>
          </div>
          <div class="card-body">
            <p><?php echo $post["body"];?></p>   
            
            <a class="card-link" href="show">
              詳細を見る
            </a>
          </div>
        </div>  
      <?php endforeach; ?> 
    </div>  
  </main>    

  <footer class="footer bg-dark">
    <div class="container">
      <p style="color:white; text-align:right;">
        ©︎takahiro-taiyoshi All rights reserved
      </p>
    </div>
  </footer>
</body>
</html>