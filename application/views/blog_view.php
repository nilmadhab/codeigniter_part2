<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to  my blog powered by Codeigniter</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
	
</head>
<body>

<div class="container">
	<h1 class="bg-info" style="text-align:center">My Blog With Codeigniter </h1>

  <div class="container">
      <form action="<?php echo base_url()."index.php/blog_save"; ?>" method="post" style="width:50%; margin: 0 auto;">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title"  placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Post </label>
        
           <textarea class="form-control" rows="3" name="post"> write your post</textarea>
        </div>
        
        <button type="submit" name="submit" class="btn btn-info">New post</button>
      </form>
    </div>  

	<table class="table-striped">
     <tr>
      <td><strong>Post title</strong></td>
      <td><strong>Post </strong></td>
    </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->title;?></td>
         <td><?php echo $post->post;?></td>
      </tr>    
     <?php }?>  
   </table>

</div>

</body>
</html>