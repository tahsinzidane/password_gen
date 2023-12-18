<?php
function getRandomStringRandom_pass($length = 16)
{
    $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($stringSpace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $stringSpace[mt_rand(0, $max)];
    }
    return implode('', $pieces);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password gen</title>
</head>
<body>
    <h1>warning : this site still in under development . <br> and the copy button isn't working</h1>
<h4>
Keep your social media sites safe with a strong pass
</h4>

 <!-- <h1> you pass : <?php echo getRandomStringRandom_pass(); ?> </h1> -->
 <button id="refreshButton">generat password</button>

<?php echo getRandomStringRandom_pass(); ?> <br> <br>
  <!-- <input type="text" id=textToCopy> -->
  <button id="copyButton">Copy Text</button>
<!-- id="copyButton" -->
<!-- id="textToCopy" -->

<script>

document.getElementById('refreshButton').addEventListener('click', function() {
  location.reload(); 
});

// copy btn

document.getElementById('copyButton').addEventListener('click', function() {
  var textToCopy = document.getElementById('textToCopy');
  textToCopy.select();
  document.execCommand('copy');
  alert('Text copied to clipboard: ' + textToCopy.value);
});


</script>
</body>
</html>