<?php
class Movie
{
    public $id;
    public $image;
    public $title;
    public $language;
    public $description;
    public $vote;

    function __construct(array $_movieData)
    {
        // controllo se tutte le chiavi sono state inserite correttamente
        $requiredKeys = ["id", "image", "title", "language", "description", "vote"];
        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_movieData)) {
                var_dump("CHIAVE NON TROVATA $key");
            }
        }
        $this->id = $_movieData["id"];
        $this->image = $_movieData["image"];
        $this->title = $_movieData["title"];
        $this->language = $_movieData["language"];
        $this->description = $_movieData["description"];
        $this->vote = $_movieData["vote"];
    }
    public function createCard()
    {
        echo '<div class="card">';
        echo '<img src="' . $this->image . '"' . ' alt="' . $this->id . '"/>';
        echo '<div class="textArea">';
        echo '<p>';
        echo '<strong>Titolo:</strong>' . '<span>' . $this->title . '<span>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Lingua:</strong>' . '<span>' . $this->language . '<span>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Descrizione:</strong>' . '<span>' . $this->description . '<span>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Voto:</strong>' . '<span>' . $this->vote . '<span>';
        echo '</p>';
        echo '</div>';
        echo '</div>';
    }
};

$movie1 = new Movie([
    "id" => 1,
    "image" => "https://cdn.pocket-lint.com/r/s/1200x630/assets/images/159643-tv-news-spider-man-no-way-home-image1-dryautoefj.jpg",
    "title" => "Spider-Man: No Way Home",
    "language" => "italiano",
    "description" => "In seguito agli eventi di Spider-Man: Far from Home, la vita di Peter Parker viene stravolta dopo che Mysterio rivela al mondo la sua identità. Peter chiede aiuto a Stephen Strange affinché usi la magia per far scordare a tutti la sua identità. Ma l'incantesimo non va come previsto e Peter si ritrova a dover affrontare nemici da altri universi e a scoprire cosa significa davvero essere Spider-Man.",
    "vote" => "5 stelle"
]);
$movie2 = new Movie([
    "id" => 2,
    "image" => "https://www.multisalacorso.com/wp-content/uploads/2022/02/uncharted.jpg",
    "title" => "Uncharted",
    "language" => "italiano",
    "description" => "Basato su una delle serie di videogiochi più vendute e acclamate dalla critica, Uncharted presenta al pubblico il giovane e furbo Nathan Drake nella sua prima avventura alla ricerca del tesoro con l’arguto partner Victor \"Sully\" Sullivan. In un’epica avventura piena di azione che attraversa il mondo intero, i due protagonisti partono alla pericolosa ricerca del \"più grande tesoro mai trovato\", inseguendo indizi che potrebbero condurli al fratello di Nathan, scomparso da tempo.",
    "vote" => "5 stelle"
])

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <?php
        echo  $movie1->createCard();
        echo  $movie2->createCard();
        ?>
    </div>
</body>

</html>