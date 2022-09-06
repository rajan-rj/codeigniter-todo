<p class="h3"> <?php echo empty($item->id) ? '<i class="fa-solid fa-plus"></i> Add a new ' : '<i class="fa-solid fa-pen-to-square"></i> Edit  ' . $item->title; ?></p>

<div class="col-md-4">
    <form method="post" action="<?php echo site_url('Todo/edit/'.$id); ?>" class="row g-3 needs-validation" novalidate>
        <div class="mb-3">
            <label for="todoTitle" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="todoTitle" value="<?php echo $item->title; ?>" required>
          
        </div>
   
        <div class="mb-3 ">
        <label for="status" class="form-label">Status</label>
        <select class="form-select"  name="status" id="status" required>
            <option selected disabled value="">Select...</option>
            <option value="pending" <?php if($item->status == "pending") {echo 'selected="selected"'; } ?>>Pending</option>
            <option value="completed" <?php if($item->status == "completed") {echo 'selected="completed"'; } ?>>Completed</option>
        </select>
        </div>

        <div class="md-3">
            <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description" required><?php echo $item->description; ?> </textarea>
            <label for="floatingTextarea2">Description</label>
            </div>
        </div>
        

        <div class="col-12">
            <button class="btn btn-outline-primary" type="submit">Save</button>
        </div>
    </form>
</div>

<?php echo validation_errors(); ?>


