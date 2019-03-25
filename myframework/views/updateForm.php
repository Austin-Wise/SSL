<form action="/crud/updateAction" method="POST">
    <?
    $data = $this->parent->getModel('fruits')->read('select * from fruit_table where id = :id', array(
      ":id" => $_REQUEST['id']
    ));
    ?>
      <div class="form-group">
        <label>Update '<?echo $data[0]["name"];?>'</label>
        <input class="form-control" type="text" name="name" id="fruit" value="<?php echo $data[0]["name"]; ?>">
        <input type="hidden" name="id" value="<?php echo $data[0]["id"]; ?>">
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Update</button> 
      </div>
    </form>
