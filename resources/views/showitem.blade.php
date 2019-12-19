@extends('admin.admindash')
@section('content1')
 <span class="sp1">{{$it->itemName}}</span>
 
 <form method="post" action="/deleteItem" id="deleteSure">
            {{method_field('delete')}}
  @csrf
  <input type="text" name="itemId" value="{{$it->id}}" hidden>
<a href="#" id="deleteItem">delete</a>
  </form> 
  @endsection
@section('content2')
 
<table class="table" id="tab"><tr><th>ItemName</th><th>category</th><th>Action</th></tr>
@foreach($it->category as $cat)
<tr id="<?php  echo $cat->id.'cat'; ?>"><td id="{{$cat->id}}" >{{$cat->categoryName}}</td>

  <td>

 <button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button> 


</td><td><button   data-toggle="modal" data-target="#{{$cat->id.$cat->categoryName}}" class="editForm btn btn-success">edit</button>

<div  id="{{$cat->id.$cat->categoryName}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit/Delete</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="editCategory<?php echo $cat->id;  ?>" >
        	{{method_field('patch')}}
        	@csrf
        	<input type="text" name="categoryName" class="form-control">
        	<input type="text" name="categoryId" value="{{$cat->id}}" hidden="hidden">
        	<button type="submit" name="submit" class="btn btn-success">Edit</button>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        <form method="post" id="deleteCategory<?php echo $cat->id.'1';  ?>" class="editForm" >
          {{method_field('delete')}}
          @csrf
          <input type="text" name="categoryId" value="{{$cat->id}}" hidden="hidden">
          <button type="submit" name="submit" class="btn btn-danger">Delete</button>
         </form>

</td></tr>
<script type="text/javascript">
  $(document).ready(function(){
    $('#editCategory<?php echo $cat->id; ?>').on('submit', function(e){
      e.preventDefault();

      $.ajax({
        type:"patch",
        url:"/editCategory",
        data:$('#editCategory<?php echo $cat->id; ?>').serialize(),
                success:function(data){
          console.log(data)
          document.getElementById("editCategory<?php echo $cat->id; ?>").reset();
          document.getElementById(data.id).innerHTML=data.categoryName;
               
           
        }

 
 
      });});
      $('#deleteCategory<?php echo $cat->id."1"; ?>').on('submit', function(e){
      e.preventDefault();

      $.ajax({
        type:"delete",
        url:"/deleteCategory",
        data:$('#deleteCategory<?php echo $cat->id.'1'; ?>').serialize(),
                success:function(data){
          console.log(data)
                    document.getElementById("deleteCategory<?php echo $cat->id."1"; ?>").reset();
 
          document.getElementById('<?php echo $cat->id."cat"; ?>').style.display='none';
         }

 
 
      });});
      

  });	
</script>
@endforeach
</table>
 
  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal">Add</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Item</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="addCategory" action="/addCategory">
        	@csrf
        	<input type="text" name="categoryName" required>
        	<input type="text" name="itemId" value="{{$it->id}}" hidden>
        	<button type="submit" class="btn btn-success">Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</script>

@endsection