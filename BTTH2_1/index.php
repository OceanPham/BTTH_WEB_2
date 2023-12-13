<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >

</head>

<body>
    <div class="container">
        <h2>Example: Comment System with Ajax, PHP & MySQL</h2>
        <form method="POST" id="commentForm">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
            </div>
            <div class="form-group">
                <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
            </div>
            <span id="message"></span>
            <div class="form-group">
                <input type="hidden" name="commentId" id="commentId" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
            </div>
        </form>
        <div id="showComments"></div>
    </div>
    
</body>
    <script src ="jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src = "comments.js"></script>
</html>