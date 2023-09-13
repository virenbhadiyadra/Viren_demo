<?php 
$name  = 'Viren';
$price = 2;
/*associative arrays*/
$nutrition = [
    'fat'   => 38, 
    'sugar' => 51, 
    'salt'  => 0.25,
    
  ];
    $nutrition['fat']   = 36;
    $nutrition['fiber'] = 2.1;
    $nutrition['protien'] = 7.3;
  /* updating vaiabels */
    $name  = 'Guest';
    $name  = 'Ivy';
    $price = 5;
    /* Index arrays */
    $best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice',
    'Bubble gum', 'Toffee', 'Jelly beans',];

    /*multidimensional arrays */
    $offers = [
        ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
        ['name' => 'Mints',  'price' => 3, 'stock' => 66,],
        ['name' => 'Fudge',  'price' => 4, 'stock' => 97,],
        ['name' => 'Chocolate',  'price' => 2, 'stock' => 83,],
    ];

    /*echo shorthand*/ 
  $name      = 'Viren';
  $favorites = ['Sour Candies', 'jelly Candies', 'Coffee',];

  /*Arithmetic operations*/
$items    = 15;
$cost     = 10;
$subtotal = $cost * $items;
$tax      = ($subtotal / 100) * 20;
$total    = $subtotal + $tax;

/*string-operator*/
$prefix  = 'Thank you';
$name    = 'Viren';
$message = "$prefix  $name";

/* comparison operators */
$item    = 'Chocolate';
$stock   = 8;
$wanted  = 5;
$can_buy = ($wanted <= $stock);

/*logical operators */
$item    = 'Chocolate';
$stock   = 3;
$wanted  = 5;
$deliver = true;
$can_buy = (($wanted <= $stock) && ($deliver == true));

/*example */
$username = 'Viren';                                   // Variable to hold username

$greeting = 'Namaste, ' . $username . '.';             // Greeting is 'Hello' + username

$offer = [                                           // Create array to hold offer
    'item'     => 'Chocolate',                       // Item on offer
    'qty'      => 3,                                 // Quantity to buy
    'price'    => 6,                                 // Usual price per pack
    'discount' => 4,   
];
$usual_price = $offer['qty'] * $offer['price'];      // Usual total price
$offer_price = $offer['qty'] * $offer['discount'];   // Offer total price
$saving      = $usual_price - $offer_price;          // Total saving

  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is 
       $<?php echo $price; ?> per pack.</p>

       <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Fiber:  <?php echo $nutrition['fiber']; ?>%</p>
    <p>Protien:  <?php echo $nutrition['protien']; ?>%</p>

    <h2>Best Sellers</h2>
    <ul>
      <li><?php echo $best_sellers[0]; ?></li>
      <li><?php echo $best_sellers[1]; ?></li>
      <li><?php echo $best_sellers[2]; ?></li>
      <li><?php echo $best_sellers[3]; ?></li>
      <li><?php echo $best_sellers[4]; ?></li>
    </ul>

    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> -
      $<?php echo $offers[0]['price']; ?> </p>
    <p><?php echo $offers[1]['name']; ?> -
      $<?php echo $offers[1]['price']; ?> </p>
    <p><?php echo $offers[2]['name']; ?> -
      $<?php echo $offers[2]['price']; ?> </p>
      <p><?php echo $offers[3]['name']; ?> -
      $<?php echo $offers[3]['price']; ?> </p>

      <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
       <?= $favorites[0] ?>.</p>

       <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>

    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>

    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted:  <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>

    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Ordered: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>

    <h2>Multi-buy Offer</h2>

<p><?= $greeting ?></p>

<p class="sticker">Save $<?= $saving ?></p>

<p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?> 
  for $<?= $offer_price ?><br> (usual price $<?= $usual_price ?>)</p> 



  </body>
</html>