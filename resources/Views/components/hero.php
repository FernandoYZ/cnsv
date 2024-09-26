<?php
function HeroSection($image, $heroTitle, $textButton, $content = '') {
    $bg = images("/{$image}");
    $sourceContent = !empty($content) ? "<p class=\"text-lg lg:text-3xl md:text-xl mb-8\">{$content}</p>" : '';

    echo "
        <section class=\"relative bg-cover bg-center h-screen\" style=\"background-image: url('{$bg}');\">
            <div class=\"flex items-center justify-center h-full bg-black bg-opacity-50\">
                <div class=\"text-center text-white p-4 md:p-6 lg:p-8 xl:p-10\">
                    <h1 class=\"text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-thin mb-8\">{$heroTitle}</h1>
                    {$sourceContent}
                    <a href=\"#\" class=\"bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition duration-300\">{$textButton}</a>
                </div>
            </div>
        </section>
    ";
}

function HeroHome($image, $heroTitle, $textButton, $content = '') {
    $bg = images("/{$image}");
    $sourceContent = !empty($content) ? "<p class=\"text-lg md:text-xl mb-8\">{$content}</p>" : '';

    echo "
        <section class=\"relative bg-cover bg-center h-screen\" style=\"background-image: url('{$bg}');\">
            <div class=\"flex items-center justify-center h-full bg-black bg-opacity-50\">
                <div class=\"text-left text-white p-4 md:p-6 lg:p-8 xl:p-10\">
                    <h1 class=\"text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-thin mb-8\">{$heroTitle}</h1>
                    {$sourceContent}
                    <a href=\"#\" class=\"bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition duration-300\">{$textButton}</a>
                </div>
            </div>
        </section>
    ";
}

?>
