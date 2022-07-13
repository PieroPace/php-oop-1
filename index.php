<?php

class Movie
{
    public $title;
    public $originalTitle;
    public $language;
    public $genres = [];
    public $genresArray = [
        [
            'id' => 1,
            'name' => 'Azione',
        ],
        [
            'id' => 2,
            'name' => 'Avventura',
        ],
        [
            'id' => 3,
            'name' => 'Animazione',
        ],
        [
            'id' => 4,
            'name' => 'Commedia',
        ],
        [
            'id' => 5,
            'name' => 'Crime',
        ],
        [
            'id' => 6,
            'name' => 'Documentario',
        ],
        [
            'id' => 7,
            'name' => 'Dramma',
        ],
        [
            'id' => 8,
            'name' => 'Famiglia',
        ],
        [
            'id' => 9,
            'name' => 'Fantasy',
        ],
        [
            'id' => 10,
            'name' => 'Storia',
        ],
        [
            'id' => 11,
            'name' => 'Horror',
        ],
        [
            'id' => 12,
            'name' => 'Musica',
        ],
        [
            'id' => 13,
            'name' => 'Mistero',
        ],
        [
            'id' => 14,
            'name' => 'Romance',
        ],
        [
            'id' => 15,
            'name' => 'Fantascienza',
        ],
        [
            'id' => 16,
            'name' => 'Film Televisivo',
        ],
        [
            'id' => 17,
            'name' => 'Thriller',
        ],
        [
            'id' => 18,
            'name' => 'Guerra',
        ],
        [
            'id' => 19,
            'name' => 'Western',
        ],
    ];
    public $budget;
    public $posterPath;
    public $productionCompanies;
    public $productionCountries;
    public $relaseDate;
    public $revenue;

    public function __construct(string $title, string $language, int $budget)
    {
        $this->title = $title;
        $this->language = $language;
        $this->budget = $budget;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }
    public function setPosterPath($posterPath)
    {
        $this->posterPath = $posterPath;
    }
    public function setProductionCompanies($productionCompanies)
    {
        $this->productionCompanies = $productionCompanies;
    }
    public function setProductionCountries($productionCountries)
    {
        $this->productionCountries = $productionCountries;
    }
    public function setRelaseDate($relaseDate)
    {
        $this->relaseDate = $relaseDate;
    }
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    public function setGenres($genres)
    {
        if (is_array($genres)) {
            foreach ($genres as $genre) {
                foreach ($this->genresArray as $genresValue) {
                    if ($genresValue['name'] === $genre) {
                        $this->genres[] = $genresValue;
                    }
                }
            }
        }
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getBudget()
    {
        return $this->budget;
    }
    public function getPosterPath()
    {
        return $this->posterPath;
    }
    public function getProductionCompanies()
    {
        return $this->productionCompanies;
    }
    public function getProductionCountries()
    {
        return $this->productionCountries;
    }
    public function getRelaseDate()
    {
        return $this->relaseDate;
    }
    public function getRevenue()
    {
        return $this->revenue;
    }
    public function getGenres()
    {
        return $this->genres;
    }
};

$movieFirst = new Movie('Eternals', 'it_IT', 200000000);
$movieFirst->setOriginalTItle('Eternals');
$movieFirst->setGenres(['Azione', 'Avventura', 'Fantasy', 'Fantascienza']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <div>
        <ul>
            <li>TITOLO: <?= $movieFirst->title ?></li>
            <li>LINGUA: <?= $movieFirst->language ?></li>
            <li>BUDGET: <?= $movieFirst->budget ?></li>
            <li>TITOLO ORIGINALE: <?= $movieFirst->originalTitle ?></li>
            <li> GENERI:
                <ul>
                    <?php foreach ($movieFirst->genres as $genre) : ?>
                        <li><?= $genre['name'] ?></li>
                    <?php endforeach ?>
                </ul>
            </li>
        </ul>
    </div>
</body>

</html>