<?php
class Movie{
    public $nome;
    public $genere;
    public $durata;
    public $lingua;
    public function __construct(string $_nome, string $_genere, int $_durata, string $_lingua)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->lingua = $_lingua;
    }
}

$Film = [new Movie('Fast and furious', 'azione', 141,'Inglese'),
         new Movie('The Plane', 'azione', 107, 'Inglese')
         ] 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Programming
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($Film as $movies) { ?>
                <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo$movies->nome;?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo$movies->genere;?></h6>
    <p class="card-text"><?php echo$movies->durata;?></p>
    <a href="#" class="card-link"><?php echo$movies->lingua;?></a>
  </div>
</div>
            <?php } ?>
        </section>
    </main>
</body>
</html>
