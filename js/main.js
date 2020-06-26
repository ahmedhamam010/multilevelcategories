$(document).ready(function(){

    fill_parent_category();
  
    function fill_parent_category(id = 0)
    {
     $.ajax({
      url:'fill_parent_category.php?parent_category_id=' + id ,
      success:function(data){
          
       $('#parent_category').html(data);
      }
     });
     
    }
  
    $('#treeview_form').on('submit', function(event){
     event.preventDefault();
     $.ajax({
      url:"add.php",
      method:"POST",
      data:$(this).serialize(),
      success:function(data){
       fill_parent_category();
       $('#treeview_form')[0].reset();
       alert(data);
      }
     })
    });


    $("#parent_category").on( "change" , function(){
        var parentId = $(this).val();
        fill_parent_category(parentId);
    } );
   });