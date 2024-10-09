<?php
class Movie
{
    private $titolo;
    private $director;
    private $actors;

    public function __construct($titolo, $director, $actors)
    {
        $this->titolo = $titolo;
        $this->director = $director;
        $this->actors = $actors;
    }

    public function riproduciFilm()
    {
        $allActors = "";
        foreach ($this->actors as $actor) {
            if ($allActors != "") {
                $allActors .= ",";
            }
            $allActors .= $actor;
        }

        return "questo film si intitola $this->titolo, il regista e $this->director e gli attori sono $allActors";
    }

}
$movie1 = new Movie("In Bruges", "Martin McDonagh", ["Colin Farrell", "Brendan Gleeson", "Ralph Fiennes"]);
$movie2 = new Movie("Fight Club", "David Fincher", ["Brad Pitt", "Edward Norton", "Helena Bonham Carter"]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Film Details</h1>
    <p><?php echo $movie1->riproduciFilm(); ?></p>
    <p><?php echo $movie2->riproduciFilm(); ?></p>
</body>

</html>