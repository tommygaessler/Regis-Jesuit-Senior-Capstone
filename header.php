<?php
    $pageID = strtolower($pageTitle);

    $capstone = 'Capstone';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title><?php echo $capstone; ?> | <?php echo $pageTitle; ?></title>

  <meta name="description" content="<?php echo $description; ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="images/crest.png">

  <!-- Styles -->
  <link rel="stylesheet" href="genericons/genericons.css">
  <link rel="stylesheet" href="style.css">

  <!-- Twitter Cards -->

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@tommygaessler">
  <meta name="twitter:title" content="<?php echo $capstone; ?> | <?php echo $pageTitle; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="<?php echo $image; ?>">

  <!-- OpenGraph -->

  <meta property="og:title" content="<?php echo $capstone; ?> | <?php echo $pageTitle; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:image" content="<?php echo $image; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://capstone.tommygaessler.com" />
  <meta property="fb:app_id" content="678988888930195" />
  <meta property="og:site_name" content="Senior Capstone" />

</head>
<?php if(!empty($postID)) : ?>
<body id="single">
<?php else : ?>
<body id="<?php echo $pageID; ?>">
<?php endif; ?>
  <header>
    <div class="row">

      <a id="menuToggle"><span class="genericon genericon-menu"></span></a>

      <a href="/"><img src="images/logo.png" alt="Regis Jesuit"></a>
      <nav>
        <a href="growth.php">Growth</a>
        <a href="competence.php">Competence</a>
        <a href="religious.php">Religious</a>
        <a href="loving.php">Loving</a>
        <a href="justice.php">Justice</a>
      </nav>
    </div>
  </header>
