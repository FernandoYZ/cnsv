<?php

function Container($content, $bgClass = '', $title = '') {
    $titleHtml = $title ? "<h2 class=\"text-3xl font-bold text-center mb-8\">{$title}</h2>" : '';
    return "
    <section class=\"w-full {$bgClass}\">
      <div class=\"container mx-auto px-4 md:px-8 lg:px-16 xl:px-52 py-12 md:py-24 lg:py-32\">
        {$titleHtml}
        {$content}
      </div>
    </section>
    ";
}
