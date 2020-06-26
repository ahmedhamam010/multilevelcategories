<!DOCTYPE html>
<html>
 <head>
  <title>Multi level categories</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style>
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Multi level categories</h2>
   <br /><br />
   <div class="row">
    <div class="col-md-6">
     <form method="post" id="treeview_form">
      <div class="form-group">
       <label>Select Parent Category</label>
       <select name="parent_category" id="parent_category" class="form-control">
       
       </select>
      </div>
      <div class="form-group">
       <label>Add Category Name</label>
       <input type="text" name="category_name" id="category_name" class="form-control">
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Add" class="btn btn-info" />
      </div>
     </form>
    </div>
   </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="js/main.js"></script>
 </body>
</html>
