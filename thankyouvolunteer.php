


<?php
error_reporting(0);
function build_calendar($month,$year){
    $mysqli= new mysqli('localhost','root','root','');

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signupvolunteer.css" />
    <script
      type="text/javascript"
      src="https://cdn.weglot.com/weglot.min.js"
    ></script>
    <style>
      :root {
        /* Base font size */
        font-size: 3px;

        /* Set neon color */
        --neon-text-color: rgb(240, 125, 188);
        --neon-border-color: rgb(10, 185, 238);
      }

      body {
        font-family: "Exo 2", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #000;
        min-height: 100vh;
      }

      h1 {
        font-size: 13rem;
        font-weight: 200;
        font-style: italic;
        color: #fff;
        padding: 4rem 6rem 5.5rem;
        border: 0.4rem solid #fff;
        border-radius: 2rem;
        text-transform: uppercase;
        animation: flicker 1.5s infinite alternate;
      }

      h1::-moz-selection {
        background-color: var(--neon-border-color);
        color: var(--neon-text-color);
      }

      h1::selection {
        background-color: var(--neon-border-color);
        color: var(--neon-text-color);
      }

      h1:focus {
        outline: none;
      }

      /* Animate neon flicker */
      @keyframes flicker {
        0%,
        19%,
        21%,
        23%,
        25%,
        54%,
        56%,
        100% {
          text-shadow: -0.2rem -0.2rem 1rem #fff, 0.2rem 0.2rem 1rem #fff,
            0 0 2rem var(--neon-text-color), 0 0 4rem var(--neon-text-color),
            0 0 6rem var(--neon-text-color), 0 0 8rem var(--neon-text-color),
            0 0 10rem var(--neon-text-color);

          box-shadow: 0 0 0.5rem #fff, inset 0 0 0.5rem #fff,
            0 0 2rem var(--neon-border-color),
            inset 0 0 2rem var(--neon-border-color),
            0 0 4rem var(--neon-border-color),
            inset 0 0 4rem var(--neon-border-color);
        }

        20%,
        24%,
        55% {
          text-shadow: none;
          box-shadow: none;
        }
      }
    </style>
  </head>
  <body>
    <h1>
 <div style="text-align:center;" > 
Welcome <?php echo $_POST["fname"]; ?>.

      Thank you for becoming a HealthMatch Volunteer!
<?php echo '<br>' ?>
       
    </h1>

   
  </body>
</html>