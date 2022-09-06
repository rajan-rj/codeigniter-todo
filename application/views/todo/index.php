
<div class="row">
    <div class="col-sm-6 col-12">
    <p class="h3"><i class="fa-solid fa-list-check"></i> List </p>
    </div>
    <div class="col-sm-2 col-12" style="margin-left: -125px !important;">
        <a class="btn btn-primary pull-right" href="<?php echo site_url('todo/edit'); ?>"><i class="fa-solid fa-plus"></i> Add Todo</a>
    </div>
</div>
<div class="col-md-6">
    <table class="table table-light table-striped table-bordered">
    <thead>
        <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
        <?php if(count($todos)): foreach($todos as $key=> $todo): ?>
            <th class="text-center"><?php echo $key+1; ?></th>
            <th class="text-center"><?php echo $todo->title; ?></th>
            <th class="text-center"><?php if($todo->status == "completed") {echo '<span class="badge bg-success">'.ucfirst($todo->status).'</span>';}else {echo '<span class="badge bg-primary">'.ucfirst($todo->status); } ?></th>
            <th class="text-center"><?php echo $todo->description; ?></th>
            <th class="text-center"><?php echo anchor('todo/edit/' . $todo->id, '<i class="fa-solid fa-pen-to-square"></i>');  ?></th>
            <th class="text-center"><?php echo anchor('todo/delete/' . $todo->id, '<i class="fa-solid fa-trash"></i>');  ?></th>
        </tr> 
        <?php endforeach; ?>
        <?php else:?>
            <tr>
            <td class="table-danger" colspan="6">No items added.</td>
            </tr>
        <?php endif; ?>   
        
    </tbody>
    </table>
</div>
