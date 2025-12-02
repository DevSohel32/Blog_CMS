<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Blog - Insights, Stories &amp; Ideas</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Playfair+Display:wght@600;700;800&amp;display=swap" rel="stylesheet">
   
  <!-- Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- daisyUI CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css"
    rel="stylesheet"
    type="text/css" />
    <link rel="stylesheet" href="src/style.css">
</head>

<body class="min-h-screen flex flex-col">
  <?php
  session_start();
  include 'database/db_connect.php';
  ?>