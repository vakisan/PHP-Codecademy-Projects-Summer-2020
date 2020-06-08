<?php
// Define checkWord() here:
  function checkWord($input,$criteria){
    if($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($input[0]) !=$criteria){
      return "* This word must start with the letter ${criteria}!";
    }
    else{
      return "";
    }
  }
  
  
  
  
?>
  
<h1>Time to Practice our ABCs</h1>
<form method="post" action="">
    Enter a word that starts with the letter "a":
    <br>
    <input type="text" name="a-word" id="a-word" value="<?= $_POST['a-word']; ?>">
    <p id="a-error"><?= checkWord($_POST["a-word"],"a")?></p>
    <br>      
      
    <br>     
    Enter a word that starts with the letter "b":
    <br>
    <input type="text" id="b-word" name="b-word" value="<?= $_POST['b-word']; ?>">
    <p id="b-error"><?= checkWord($_POST["b-word"],"b")?></p>
    <br>      
      
    <br>
    Enter a word that starts with the letter "c":
    <br>
    <input type="text" id="c-word" name="c-word" value="<?= $_POST['c-word']; ?>">
    <p id="c-error"><?= checkWord($_POST["c-word"],"c")?></p>
    <br>      
      
    <br>
    <input type="submit" value="Submit Words">
</form>
<div>
    <h3>"a" is for: <?= $_POST["a-word"];?><h3>
    <h3>"b" is for: <?= $_POST["b-word"];?><h3>
    <h3>"c" is for: <?= $_POST["c-word"];?><h3>    
<div>  