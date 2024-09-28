<?php
function HeroSection($image, $heroTitle, $content = '', $textButton = '', $uriButton = '') {
    $bg = images("/hero/{$image}");
    $button = !empty($textButton) && !empty($uriButton) ? HeroButton($textButton, $uriButton) : '';
    $sourceContent = !empty($content) ? "<p class=\"text-lg md:text-xl lg:text-2xl font-normal mb-8\">{$content}</p>" : '';

    echo "
    <section class=\"relative h-screen flex items-center justify-center\" aria-labelledby=\"who-we-are\">
        <div class=\"absolute inset-0 z-0\">
            <img
                src=\"{$bg}\"
                alt=\"Fondo hero de {$heroTitle}\"
                class=\"w-full h-full object-cover\"
            />
            <div class=\"absolute inset-0 bg-black opacity-50\"></div> 
        </div>
        <div class=\"relative z-10 text-center text-white container mx-auto px-4 md:px-8 lg:px-16 xl:px-52\">
            <h1 id=\"who-we-are\" class=\"text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-thin mb-6\">{$heroTitle}</h1>
            {$sourceContent}
            {$button}
        </div>
    </section>
    ";
}

function HeroHome($image, $heroTitle, $textButton = '', $uriButton = '') {
    $bg = images("/hero/{$image}");
    $button = !empty($textButton) && !empty($uriButton) ? HeroButton($textButton, $uriButton) : '';

    echo "
    <section class=\"relative h-screen flex items-center justify-center\" aria-labelledby=\"who-we-are\">
        <div class=\"absolute inset-0 z-0\">
            <img
                src=\"{$bg}\"
                alt=\"Fondo hero de {$heroTitle}\"
                class=\"w-full h-full object-cover\"
            />
        </div>
        <div class=\"relative z-10 container mx-auto px-4 md:px-8 lg:px-16 xl:px-52\">
            <h1 id=\"who-we-are\" class=\"text-white text-3xl md:text-5xl lg:text-6xl xl:text-8xl font-thin mb-6 text-center md:text-left lg:max-w-[70%]\">{$heroTitle}</h1>
            <div class=\"text-center md:text-left\">{$button}</div>
        </div>
    </section>
    ";
}

?>
