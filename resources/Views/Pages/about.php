<?=
HeroSection(
    'about_hero.jpg',
    '¿Quiénes somos?',
    'Somos una Institución Educativa de Acción Conjunta de Educación Básica Regular entre la Iglesia Católica y el Estado Peruano, erigida como Colegio – Seminario Menor, ',
)
?>

<?php
function mision_vision() {
    $mission = ArticleLeft(
        'Nuestra Misión',
        images('/hero/home_hero_org.jpg'),
        config('mission')
    );
    $vision = ArticleRight(
        'Nuestra Visión',
        images('/hero/home_hero_org.jpg'),
        config('vision')
    );
    $container = Container(
        "{$mission}{$vision}",
        'bg-neutral-50',
    );
    return $container;
}

echo mision_vision();
?>

<?=
HeroSection(
    'about_organization.jpg',
    'Nuestra organización',
)
?>
