<!DOCTYPE html>
<html>
    <?php $id = $_POST['modify_id']; ?>
    <?php require '../View/header.php'; ?>
    <h2 class="center-align teal-darken-3" style="font-family: Dancing-Script !important;color:white !important;">STAFF DASHBOARD</h2>
   <section class="container black-text teal-lighten-5">
    <form class="teal-lighten-3" action="../Model/modify_staff_model.php" method="POST">
    <h3 class="white-text center">MODIFY STUDENT DETAILS</h3>    
    <p>FIll in the attributes you want to modify, leave blank if you want to keep it unchanged</p>
        <label class="white-text" style="font-size: 20px">Name</label><input type="text" name="name" value="">
        <label class="white-text" style="font-size: 20px">Phone</label><input type="text" name="phone" value="">
        <label class="white-text" style="font-size: 20px">Email</label><input type="text" name="email" value="">
        <input type="hidden" name="modify_id" value="<?php echo $id;?>" class="btn brand z-depth-0">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn brand z-depth-0"></div>
        <div class="red-text"></div>
    </form>
    </section>

   
</html>