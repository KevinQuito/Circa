<!-- You can see how messy php is with its syntax, so we're going to be using login.blade.php,
since blade helps to make it look cleaner -->
<h1><?php echo $heading; ?></h1>
<h1><?php echo $heading2; ?></h1>
<?php foreach($info as $info): ?>
    <h2><?php echo $info['name']; ?></h2>
    <p><?php echo $info['description']; ?></p>
<?php endforeach; ?>